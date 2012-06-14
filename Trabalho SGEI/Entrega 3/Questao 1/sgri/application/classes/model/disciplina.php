<?php
// include("statement/util.php");

/**
 * Classe que representa a entidade Disciplina. Aqui, serão implementados os métodos de persistência, exclusão, getters
 * e setters dos atributos, além de consultas relacionadas à entidade.
 *
 * @author Paulo Henrique
 *
 * Date: 14/04/12
 */
class Model_Disciplina extends Model_Util
{
    private $_coddis;
    private $_nomdis;

    /**
     * Metodo construtor da classe. Este permite duas construções: A primeira, onde o paramentro de codigo de usuario
     * recebe um codigo valido, cria um objeto com um registro já existente no banco de dados, a fim de atualizar os
     * dados do mesmo. No segundo caso, onde o codigo não é passado, o objeto poderá ser usado para salvar um novo
     * registro no banco de dados, ou retornar consultas SQL.
     *
     * @param null $coddis
     */
    public function __construct($coddis = null)
    {
        $this->_obterEntidade($coddis);
    }

    /**
     * Metodo getter do atributo de codigo da disciplina.
     *
     * @return string
     */
    public function getCoddis()
    {
        return $this->_coddis;
    }

    /**
     * Metodo setter do atributo de codigo da disciplina.
     *
     * @param $coddis
     */
    public function setCoddis($coddis)
    {
        $this->_coddis = $coddis;
    }

    /**
     * Metodo getter do atributo de nome da disciplina.
     *
     * @return string
     */
    public function getNomdis()
    {
        return $this->_nomdis;
    }

    /**
     * Metodo setter do atributo de codigo da disciplina.
     *
     * @param $nomdis
     */
    public function setNomdis($nomdis)
    {
        $this->_nomdis = $nomdis;
    }

    public function persistir()
    {
        try
        {
            if ((bool)$this->getCoddis())
            {
                $campos = array("NOMDIS" => $this->getNomdis(),);
                return $this->_persistir("DISCIPLINA", $campos, parent::MODO_UPDATE, "CODDIS = ".$this->getCoddis());
            }
            else
            {
                $coddis = $this->_obterProximaChave("DISCIPLINA", "CODDIS");
                $campos = array(
                    "CODDIS" => $coddis,
                    "NOMDIS" => $this->getNomdis(),
                );

                $this->setCoddis($coddis);
                return $this->_persistir("DISCIPLINA", $campos);
            }
        }
        catch(Exception $e)
        {
            throw new Exception($e->getMessage(), $e->getCode());
        }
    }

    public function remover()
    {
        $this->_remover("DISCIPLINA", "CODDIS = ".$this->getCoddis());
    }

    private function _obterEntidade($coddis)
    {
        if ((bool)$coddis)
        {
            $sql    = "SELECT * FROM DISCIPLINA WHERE CODDIS = ".$coddis;
            $result = Statement::getInstance()->fetchRow($sql);

            if ((bool)$result)
            {
                try
                {
                    $this->setCoddis($result["CODDIS"]);
                    $this->setNomdis($result["NOMDIS"]);
                }
                catch (Exception $e)
                {
                    throw new Exception($e->getMessage(), $e->getCode());
                }
            }
        }
    }

    public static function obterDisciplinaPorNome($nomdis)
    {
        $coddis = self::_getCoddisPorNome($nomdis);

        $entidade = null;
        if ((bool)$coddis)
        {
            $entidade = new Model_Disciplina($coddis);
        }
        else
        {
            $entidade = new Model_Disciplina();
            $entidade->setNomdis($nomdis);
            $entidade->persistir();
        }

        return $entidade;
    }

    private static function _getCoddisPorNome($nomdis)
    {
        $sql = "SELECT CODDIS
                FROM DISCIPLINA
                WHERE NOMDIS = '$nomdis'";

        return Statement::getInstance()->fetchOne($sql);
    }

}