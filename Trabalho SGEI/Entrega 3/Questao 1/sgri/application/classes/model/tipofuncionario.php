<?php
// include("statement/util.php");

/**
 * Classe que representa a entidade Tipofuncionario. Aqui, serão implementados os métodos de persistência, exclusão, getters
 * e setters dos atributos, além de consultas relacionadas à entidade.
 *
 * @author Paulo Henrique
 *
 * Date: 14/04/12
 */
class Model_Tipofuncionario extends Model_Util
{
    private $_codtipfun;
    private $_nomtipfun;

    /**
     * Metodo construtor da classe. Este permite duas construções: A primeira, onde o paramentro de codigo de usuario
     * recebe um codigo valido, cria um objeto com um registro já existente no banco de dados, a fim de atualizar os
     * dados do mesmo. No segundo caso, onde o codigo não é passado, o objeto poderá ser usado para salvar um novo
     * registro no banco de dados, ou retornar consultas SQL.
     *
     * @param null $coddis
     */
    public function __construct($codtipfun = null)
    {
        $this->_obterEntidade($codtipfun);
    }

    /**
     * Metodo getter do atributo de codigo do tipo de funcionario.
     *
     * @return string
     */
    public function getCodtipfun()
    {
        return $this->_codtipfun;
    }

    /**
     * Metodo setter do atributo de codigo do tipo de funcionario.
     *
     * @param $codtipfun
     */
    public function setCodtipfun($codtipfun)
    {
        $this->_codtipfun = $codtipfun;
    }

    /**
     * Metodo getter do atributo de nome do tipo de funcionario.
     *
     * @return string
     */
    public function getNomtipfun()
    {
        return $this->_nomtipfun;
    }

    /**
     * Metodo setter do atributo de codigo do tipo de funcionario.
     *
     * @param $nomtipfun
     */
    public function setNomtipfun($nomtipfun)
    {
        $this->_nomtipfun = $nomtipfun;
    }

    public function persistir()
    {
        try
        {
            if ((bool)$this->getCoddis())
            {
                $campos = array("NOMTIPFUN" => $this->getNomtipfun(),);
                return $this->_persistir("TIPOFUNCIONARIO", $campos, parent::MODO_UPDATE, "CODTIPFUN = ".$this->getCodtipfun());
            }
            else
            {
                $campos = array(
                    "CODTIPFUN" => $this->_obterProximaChave("TIPOFUNCIONARIO", "CODTIPFUN"),
                    "NOMTIPFUN" => $this->getNomtipfun(),
                );
                return $this->_persistir("TIPOFUNCIONARIO", $campos);
            }
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage(), $e->getCodtipfun());
        }
    }

    public function remover()
    {
        $this->_remover("TIPOFUNCIONARIO", "CODTIPFUN = ".$this->getCodtipfun());
    }

    private function _obterEntidade($codtipfun)
    {
        if ((bool)$codtipfun)
        {
            $sql    = "SELECT * FROM TIPOFUNCIONARIO WHERE CODTIPFUN = ".$codtipfun;
            $result = Statement::getInstance()->fetchRow($sql);

            if ((bool)$result)
            {
                try
                {
                    $this->setCodtipfun($result["CODTIPFUN"]);
                    $this->setNomtipfun($result["NOMTIPFUN"]);
                }
                catch (Exception $e)
                {
                    throw new Exception($e->getMessage(), $e->getCode());
                }
            }
        }
    }

    public static function obterTodosTipos()
    {
        $sql = "SELECT CODTIPFUN, NOMTIPFUN FROM TIPOFUNCIONARIO";

        return Statement::getInstance()->fetchAll($sql);
    }

}