<?php
// include("statement/util.php");

/**
 * Classe que representa a entidade Horario. Aqui, serão implementados os métodos de persistência, exclusão, getters
 * e setters dos atributos, além de consultas relacionadas à entidade.
 *
 * @author Paulo Henrique
 *
 * Date: 14/04/12
 */
class Model_Horario extends Model_Util
{

    private $_codhor;
    private $_diasem;
    private $_horini;
    private $_horfim;

    /**
     * Metodo construtor da classe. Este permite duas construções: A primeira, onde o paramentro de codigo de usuario
     * recebe um codigo valido, cria um objeto com um registro já existente no banco de dados, a fim de atualizar os
     * dados do mesmo. No segundo caso, onde o codigo não é passado, o objeto poderá ser usado para salvar um novo
     * registro no banco de dados, ou retornar consultas SQL.
     *
     * @param null $codhor
     */
    public function __construct($codhor = null)
    {
        $this->_obterEntidade($codhor);
    }

    /**
     * Metodo getter do atributo de codigo da horario.
     *
     * @return string
     */
    public function getCodhor()
    {
        return $this->_codhor;
    }

    /**
     * Metodo setter do atributo de codigo da horario.
     *
     * @param $codhor
     */
    public function setCodhor($codhor)
    {
        $this->_codhor = $codhor;
    }

    /**
     * Metodo getter do atributo de dia da semana.
     *
     * @return string
     */
    public function getDiasem()
    {
        return $this->_diasem;
    }

    /**
     * Metodo setter do atributo de dia da semana.
     *
     * @param $diasem
     */
    public function setDiasem($diasem)
    {
        $this->_diasem = $diasem;
    }

    /**
     * Metodo getter do atributo de hora de inicio do horario.
     *
     * @return string
     */
    public function getHorini()
    {
        return $this->_horini;
    }

    /**
     * Metodo setter do atributo de hora de inicio do horario.
     *
     * @param $horini
     */
    public function setHorini($horini)
    {
        $this->_horini = $horini;
    }

    /**
     * Metodo getter do atributo de hora final do horario
     *
     * @return string
     */
    public function getHorfim()
    {
        return $this->_horfim;
    }

    /**
     * Metodo setter do atributo de hora final do horario.
     *
     * @param $horfim
     */
    public function setHorfim($horfim)
    {
        $this->_horfim = $horfim;
    }

    public function persistir()
    {
        try
        {
            if ((bool)$this->getCodhor())
            {
                $campos = array(
                    "DIASEM" => $this->getDiasem(),
                    "HORINI" => $this->getHorini(),
                    "HORFIM" => $this->getHorfim(),
                );
                return $this->_persistir("HORARIO", $campos, parent::MODO_UPDATE, "CODHOR = ".$this->getCodhor());
            }
            else
            {
                $campos = array(
                    "CODHOR" => $this->_obterProximaChave("HORARIO", "CODHOR"),
                    "DIASEM" => $this->getDiasem(),
                    "HORINI" => $this->getHorini(),
                    "HORFIM" => $this->getHorfim(),
                );
                return $this->_persistir("HORARIO", $campos);
            }
        }
        catch(Exception $e)
        {
            throw new Exception($e->getMessage(), $e->getCode());
        }
    }

    public function remover()
    {
        $this->_remover("HORARIO", "CODHOR = ".$this->getCodhor());
    }

    private function _obterEntidade($codhor)
    {
        if ((bool)$codhor)
        {
            $sql    = "SELECT CODHOR,
                        DIASEM,
                        TO_CHAR(HORINI, 'HH24:MI') HORINI,
                        TO_CHAR(HORFIM, 'HH24:MI') HORFIM
                       FROM HORARIO
                       WHERE CODHOR = ".$codhor;
            $result = Statement::getInstance()->fetchRow($sql);
            if ((bool)$result)
            {
                try
                {
                    $this->setCodhor($result["CODHOR"]);
                    $this->setDiasem($result["DIASEM"]);
                    $this->setHorini($result["HORINI"]);
                    $this->setHorfim($result["HORFIM"]);
                }
                catch (Exception $e)
                {
                    throw new Exception($e->getMessage(), $e->getCode());
                }
            }
        }
    }

    public static function listarHorariosTurma($codtur)
    {
        $sql = "SELECT CODHOR,
                  DIASEM||' - '||TO_CHAR(HORINI, 'HH24:MI:SS')||' ÀS '||TO_CHAR(HORFIM, 'HH24:MI:SS')
                FROM HORARIO H, TURMA T
                WHERE H.CODHOR = T.CODHOR
                  AND T.CODTUR = '$codtur'";

        return Statement::getInstance()->fetchAll($sql);
    }

}