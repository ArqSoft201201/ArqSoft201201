<?php
/**
 * Classe de métodos estáticos, usados para funções gerais relacionadas às classes da camada Model.
 * User: Paulo
 * Date: 04/04/12
 * Time: 23:11
 */
class Util
{
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
    public static function obterProximaChave($nomeEntidade, $nomeColuna)
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
}