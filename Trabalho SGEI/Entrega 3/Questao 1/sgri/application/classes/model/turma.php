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
class Model_Turma extends Model_Util
{
    private $_codtur;
    private $_nomtur;
    private $_coddis;
    private $_codfun;
    private $_codsal;

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
     * Metodo getter do atributo de codigo da turma.
     *
     * @return string
     */
    public function getCodtur()
    {
        return $this->_codtur;
    }

    /**
     * Metodo setter do atributo de codigo da turma.
     *
     * @param $codtur
     */
    public function setCodtur($codtur)
    {
        $this->_codtur = $codtur;
    }

    /**
     * Metodo getter do atributo de nome da turma.
     *
     * @return string
     */
    public function getNomtur()
    {
        return $this->_nomtur;
    }

    /**
     * Metodo setter do atributo de nome da turma.
     *
     * @param $nomtur
     */
    public function setNomtur($nomtur)
    {
        $this->_nomtur = $nomtur;
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
     * Metodo getter do atributo de codigo do funcionario.
     *
     * @return string
     */
    public function getCodfun()
    {
        return $this->_codfun;
    }

    /**
     * Metodo setter do atributo de codigo do funcionario.
     *
     * @param $codfun
     */
    public function setCodfun($codfun)
    {
        $this->_codfun = $codfun;
    }

    /**
     * Metodo getter do atributo de numero da sala.
     *
     * @return mixed
     */
    public function getCodsal()
    {
        return $this->_codsal;
    }

    /**
     * Metodo setter do atributo de numero da sala.
     *
     * @param $codsal
     */
    public function setCodsal($codsal)
    {
        $this->_codsal = $codsal;
    }

    public function validar()
    {
        if ((bool)$this->getCoddis() === false)
        {
            return false;
        }

        if ((bool)$this->getCodfun() === false)
        {
            return false;
        }

        if ((bool)$this->getcodsal() === false)
        {
            return false;
        }

        return true;
    }

    public function persistir()
    {
        try
        {
            if ((bool)$this->getCodtur())
            {
                $campos = array(
                    "NOMTUR" => $this->getNomtur(),
                    "CODDIS" => $this->getCoddis(),
                    "CODFUN" => $this->getCodfun(),
                    "CODSAL" => $this->getCodsal(),
                );
                return $this->_persistir("TURMA", $campos, parent::MODO_UPDATE, "CODTUR = ".$this->getCodtur());
            }
            else
            {
                $codtur = $this->_obterProximaChave("TURMA", "CODTUR");
                $campos = array(
                    "CODTUR" => $codtur,
                    "NOMTUR" => $this->getNomtur(),
                    "CODDIS" => $this->getCoddis(),
                    "CODFUN" => $this->getCodfun(),
                    "CODSAL" => $this->getCodsal(),
                );
                $this->setCodtur($codtur);
                return $this->_persistir("TURMA", $campos);
            }
        }
        catch(Exception $e)
        {
            throw new Exception($e->getMessage(), $e->getCode());
        }
    }

    public function remover()
    {
        $this->_remover("TURMA", "CODTUR = ".$this->getCodtur());
    }

    private function _obterEntidade($codtur)
    {
        if ((bool)$codtur)
        {
            $sql    = "SELECT * FROM TURMA WHERE CODTUR = ".$codtur;
            $result = Statement::getInstance()->fetchRow($sql);

            if ((bool)$result)
            {
                try
                {
                    $this->setCodfun($result["CODTUR"]);
                    $this->setNomtur($result["NOMTUR"]);
                    $this->setCoddis($result["CODDIS"]);
                    $this->setCodfun($result["CODFUN"]);
                    $this->setCodsal($result["CODSAL"]);
                }
                catch (Exception $e)
                {
                    throw new Exception($e->getMessage(), $e->getCode());
                }
            }
        }
    }

    public static function obterCodturPorNome($nomtur)
    {
        $sql = "SELECT CODTUR
                FROM TURMA
                WHERE UPPER(NOMTUR) = UPPER('$nomtur')";
        return Statement::getInstance()->fetchOne($sql);
    }

    public static function listarTurmasPorProfessor($codfun)
    {
        $sql = "SELECT CODTUR,
                  T.NOMTUR||' / '||D.NOMDIS DESTUR
                FROM TURMA T, DISCIPLINA D
                WHERE T.CODDIS = D.CODDIS
                  AND T.CODFUN = '$codfun'";
        return Statement::getInstance()->fetchAll($sql);
    }

    public static function obterSalaTurma($codtur)
    {
        $sql = "SELECT 'SALA '||NUMSAL||' - PREDIO '||NUMPRE SALA, CODSAL
                  FROM TURMA, RECURSO
                  WHERE CODREC = CODSAL
                    AND CODTUR = $codtur";

        return Statement::getInstance()->fetchAll($sql);
    }

}