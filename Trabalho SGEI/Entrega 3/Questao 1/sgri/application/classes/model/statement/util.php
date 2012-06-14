<?php
// include("statement/statement.php");
include("statement.php");

class Model_Util
{
    // simboliza o modo de inserção de dado.
    const MODO_INSERT = 1;
    // simboliza o modo de atualizacao de dado.
    const MODO_UPDATE = 2;

    /**
     * Metodo usado para persistencia
     *
     * @param $nomeTabela Nome da tabela dos dados persistidos.
     * @param $campos     Nome e valor dos campos que serão atualizados. A passagem de nom/valor será no
     *                    formato chave/valor do array.
     * @param $modo       Descreve se a forma de persistencia e inserção de um novo registro ou atualizacao.
     *                    a operacao padrao é inclusao.
     * @param $where      Clausulas Where de uma operacao de atualizacao (update). Somente será usada por
     *                    este metodo em casos que o $modo for update.
     *
     * @return int
     * @throws Exception
     */
    protected function _persistir($nomeTabela, array $campos, $modo = self::MODO_INSERT, $where = null)
    {
        $sql = false;
        if ($modo === self::MODO_INSERT)
        {
            $sql = self::_obterInsertSql($nomeTabela, $campos);
        }
        else
        {
            $sql = self::_obterUpdateSql($nomeTabela, $campos, $where);
        }

        try
        {
            return Statement::getInstance()->execute($sql);
        }
        catch(Exception $e)
        {
            throw new Exception($e->getMessage(), $e->getCode());
        }
    }

    /**
     * Retorna a string de insersao de dados.
     *
     * @param $nomeTabela Nome da tabela com dados inseridos.
     * @param $campos     Array de chave/valor, indicando campos/valor a ser inserido.
     *
     * @return String
     */
    protected function _obterInsertSql($nomeTabela, array $campos)
    {
        $stringCampo = "";
        $stringValor = "";
        foreach ($campos as $campo=>$valor) {
            $stringCampo .= "$campo, ";
            $stringValor .= self::_obterDadoTratado($valor).", ";
        }

        $stringCampo = substr($stringCampo, 0, -2);
        $stringValor = substr($stringValor, 0, -2);

        $sql = "INSERT INTO $nomeTabela ($stringCampo) VALUES($stringValor)";
        return $sql;
    }

    /**
     * Retorna a string de atualizacao de dados.
     *
     * @param $nomeTabela Nome da tabela com dados atualizados.
     * @param $campos     Array de chave/valor, indicando campos/valor a ser atualizado.
     *
     * @return String
     */
    protected function _obterUpdateSql($nomeTabela, array $campos, $where)
    {
        $sql = "UPDATE $nomeTabela SET ";
        foreach ($campos as $campo=>$valor) {
            $sql .= "$campo = ".self::_obterDadoTratado($valor).", ";
        }

        $sql = substr($sql, 0, -2);
        $sql .= " WHERE $where";

        return $sql;
    }

    /**
     * Remove registros da tabela
     *
     * @param $nomeTabela Nome da tabela.
     * @param $where Clausulas where.
     *
     */
    protected function _remover($nomeTabela, $where)
    {
        $sql = "DELETE FROM $nomeTabela WHERE $where";

        try
        {
            return Statement::getInstance()->execute($sql);
        }
        catch(Exception $e)
        {
            throw new Exception($e->getMessage(), $e->getCode());
        }
    }

    /**
     * Verifica se o dado a ser usado nas Queries sao do tipo Data, String ou Numerico. ESte metodo
     * retornará o valor com o devido tratamento.
     *
     * @return String
     */
    protected function _obterDadoTratado($dado)
    {
        $tipo = gettype($dado);

        if (strtoupper($tipo) === "DOUBLE" || strtoupper($tipo) === "INTEGER")
        {
            return $dado;
        }

        if (strtoupper($tipo) === "STRING")
        {
            if (preg_match("/(\d\d)\/(\d\d)\/(\d\d\d\d)/", $dado))
            {
                return "TO_DATE('$dado', 'DD/MM/YYYY')";
            }
        }

        return "'$dado'";
    }

    /**
     * Retorna o valor da próxima chave de determinada tabela.
     *
     * @static
     *
     * @param string $nomeEntidade Nome da entidade que deve-se obter a próxima chave válida.
     * @param string $nomeColuna   Nome da coluna que deverá ser incrementada.
     *
     * @return int
     *
     * @Exception
     */
    protected function _obterProximaChave($nomeEntidade, $nomeColuna)
    {
        try
        {
            $sql = "SELECT MAX($nomeColuna) FROM $nomeEntidade";
            return 1 + (int)Statement::getInstance()->fetchOne($sql);
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage(), $e->getCode());
        }

    }

    public static function register($dirName = null)
    {
        if ($dirName === null)
        {
            $dirName = realpath(__FILE__);
        }

        $glob = glob($dirName."/*");

        foreach ($glob as $file)
        {
            if (is_dir($file))
            {
                self::register($file);
            }
            else
            {
                require_once $file;
            }
        }
    }

}