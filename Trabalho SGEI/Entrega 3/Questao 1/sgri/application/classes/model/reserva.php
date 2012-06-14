<?php
// include("statement/util.php");

/**
 * Classe que representa a entidade Reserva. Aqui, serão implementados os métodos de persistência, exclusão, getters
 * e setters dos atributos, além de consultas relacionadas à entidade.
 *
 * @author Paulo Henrique
 *
 * Date: 14/04/12
 */
class Model_Reserva extends Model_Util
{
    private $_codres;
    private $_nomeve;
    private $_codtur;
    private $_codfun;
    private $_codhor;
    private $_idtipres;
    private $_datini;
    private $_datfim;
    private $_codsal;
    private $_desoco;

    /**
     * Metodo construtor da classe. Este permite duas construções: A primeira, onde o paramentro de codigo de usuario
     * recebe um codigo valido, cria um objeto com um registro já existente no banco de dados, a fim de atualizar os
     * dados do mesmo. No segundo caso, onde o codigo não é passado, o objeto poderá ser usado para salvar um novo
     * registro no banco de dados, ou retornar consultas SQL.
     *
     * @param null $codtur
     * @param null $codhor
     */
    public function __construct($codres = null)
    {
        $this->_obterEntidade($codres);
    }

    /**
     * Metodo getter do atributo de codigo do reserva.
     *
     * @return string
     */
    public function getCodres()
    {
        return $this->_codres;
    }

    /**
     * Metodo setter do atributo de codigo do reserva.
     *
     * @param $codres
     */
    public function setCodres($codres)
    {
        $this->_codres = $codres;
    }

    /**
     * Metodo getter do atributo de nome do evento.
     *
     * @return string
     */
    public function getNomeve()
    {
        return $this->_nomeve;
    }

    /**
     * Metodo setter do atributo de nome do evento.
     *
     * @param $nomeve
     */
    public function setNomeve($nomeve)
    {
        $this->_nomeve = $nomeve;
    }

    /**
     * Metodo setter do atributo de nome do evento.
     *
     * @param $nomeve
     */
    public function setCodusu($nomeve)
    {
        $this->_nomeve = $nomeve;
    }

    /**
     * Metodo getter do atributo de codigo de turma.
     *
     * @return string
     */
    public function getCodtur()
    {
        return $this->_codtur;
    }

    /**
     * Metodo setter do atributo de codigo de turma.
     *
     * @param $codtur
     */
    public function setCodtur($codtur)
    {
        $this->_codtur = $codtur;
    }

    /**
     * Metodo getter do atributo de codigo de funcionario.
     *
     * @return string
     */
    public function getCodfun()
    {
        return $this->_codfun;
    }

    /**
     * Metodo setter do atributo de codigo de funcionario.
     *
     * @param $codfun
     */
    public function setCodfun($codfun)
    {
        $this->_codfun = $codfun;
    }

    /**
     * Metodo getter do atributo de codigo do horario.
     *
     * @return string
     */
    public function getCodhor()
    {
        return $this->_codhor;
    }

    /**
     * Metodo setter do atributo de codigo de horario.
     *
     * @param $codhor
     */
    public function setCodhor($codhor)
    {
        $this->_codhor = $codhor;
    }

    /**
     * Metodo getter do atributo de id de tipo de reserva.
     *
     * @return string
     */
    public function getIdtipres()
    {
        return $this->_idtipres;
    }

    /**
     * Metodo setter do atributo de id de tipo de reserva.
     *
     * @param $idtipres
     */
    public function setIdtipres($idtipres)
    {
        $this->_idtipres = $idtipres;
    }


    /**
     * Metodo getter do atributo de data inicial da reserva.
     *
     * @return string
     */
    public function getDatini()
    {
        return $this->_datini;
    }

    /**
     * Metodo setter do atributo de data de inicio da reserva.
     *
     * @param $datini
     */
    public function setDatini($datini)
    {
        $this->_datini = $datini;
    }


    /**
     * Metodo getter do atributo de data de fim da reserva.
     *
     * @return string
     */
    public function getDatfim()
    {
        return $this->_datfim;
    }

    /**
     * Metodo setter do atributo de data de fim da reserva.
     *
     * @param $datfim
     */
    public function setDatfim($datfim)
    {
        $this->_datfim = $datfim;
    }

    /**
     * Metodo getter do atributo de codigo de sala.
     *
     * @return string
     */
    public function getCodSal()
    {
        return $this->_codsal;
    }

    /**
     * Metodo setter do atributo de codigo de sala.
     *
     * @param $codsal
     */
    public function setCodsal($codsal)
    {
        $this->_codsal = $codsal;
    }

    /**
     * Metodo getter do atributo de descrição da ocorrência.
     *
     * @return string
     */
    public function getDesoco()
    {
        return $this->_desoco;
    }

    /**
     * Metodo setter do atributo de descrição da ocorrência.
     *
     * @param $desoco
     */
    public function setDesoco($desoco)
    {
        $this->_desoco = $desoco;
    }


    public function persistir()
    {
        try
        {
            if ((bool)$this->getCodres())
            {
                $campos = array(
                    "CODRES"   => $this->getCodres(),
                    "NOMEVE"   => $this->getNomeve(),
                    "CODTUR"   => $this->getCodtur(),
                    "CODFUN"   => $this->getCodfun(),
                    "CODHOR"   => $this->getCodhor(),
                    "IDTIPRES" => $this->getIdtipres(),
                    "DATINI"   => $this->getDatini(),
                    "DATFIM"   => $this->getDatfim(),
                    "CODSAL"   => $this->getCodSal(),
                    "DESOCO"   => $this->getDesoco(),

                );
                return $this->_persistir("RESERVA", $campos, parent::MODO_UPDATE, "CODREC = " . $this->getCodres());
            }
            else
            {
                $codres = $this->_obterProximaChave("RESERVA", "CODRES");
                $campos = array(
                    "CODRES"   => $codres,
                    "NOMEVE"   => $this->getNomeve(),
                    "CODTUR"   => $this->getCodtur(),
                    "CODFUN"   => $this->getCodfun(),
                    "CODHOR"   => $this->getCodhor(),
                    "IDTIPRES" => $this->getIdtipres(),
                    "DATINI"   => $this->getDatini(),
                    "DATFIM"   => $this->getDatfim(),
                    "CODSAL"   => $this->getCodSal(),
                    "DESOCO"   => $this->getDesoco(),
                );
                $this->setCodres($codres);
                return $this->_persistir("RESERVA", $campos);
            }
        }
        catch(Exception $e)
        {
            throw new Exception($e->getMessage(), $e->getCode());
        }
    }

    public function remover()
    {
        $this->_remover("RESERVA", "CODRES = ".$this->getCodres());
    }

    private function _obterEntidade($codres)
    {
        if ((bool)$codres)
        {
            $sql    = "SELECT * FROM RESERVA WHERE CODRES = ".$codres;
            $result = Statement::getInstance()->fetchRow($sql);

            if ((bool)$result)
            {
                try
                {
                    $this->setCodres($result["CODRES"]);
                    $this->setNomeve($result["NOMEVE"]);
                    $this->setCodtur($result["CODTUR"]);
                    $this->setCodfun($result["CODFUN"]);
                    $this->setCodhor($result["CODHOR"]);
                    $this->setIdtipres($result["IDTIPRES"]);
                    $this->setDatini($result["DATINI"]);
                    $this->setDatfim($result["DATFIM"]);
                    $this->setCodsal($result["CODSAL"]);
                    $this->setDesoco($result["DESOCO"]);
                }
                catch (Exception $e)
                {
                    throw new Exception($e->getMessage(), $e->getCode());
                }
            }
        }
    }

    public static function obterCorpoGrid($codfun, $datini = null, $datfim = null) {
        $sql = "SELECT * FROM RESERVA WHERE 1 = 1 ";

        // Caso o usuário logado nao seja da infra, ele poderá somente ver suas reservas. Um usuario da infra terá
        // acesso à todos.
        if ($codfun != Controller_Login::ACESSO_INFRA)
        {
            $sql .= " AND CODFUN = $codfun ";
        }

        if ($datini != null)
        {
            $sql .= " AND DATINI LIKE '$datini' ";
        }

        if ($datfim != null)
        {
            $sql .= " AND DATFIM LIKE '$datfim' ";
        }

        $sql .= " ORDER BY CODRES";
        $result = Statement::getInstance()->fetchAll($sql);

        for ($i = 0; $i < count($result); $i++)
        {
            $turma                = new Model_Turma($result[$i]["CODTUR"]);
            $sala                 = new Model_Recurso($result[$i]["CODSAL"]);
            $horario              = new Model_Horario($result[$i]["CODHOR"]);
            $result[$i]["NOMTUR"] = $turma->getNomtur();
            $result[$i]["NOMSAL"] = $sala->getNumsal()." - ".$sala->getNumpre();
            $result[$i]["NOMHOR"] = $horario->getDiasem()." - ".
                                    $horario->getHorini()." - ".
                                    $horario->getHorfim();
        }

        return $result;
    }

}