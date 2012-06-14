<?php
// include("statement/util.php");

/**
 * Classe que representa a entidade Recurso. Aqui, serão implementados os métodos de persistência, exclusão, getters
 * e setters dos atributos, além de consultas relacionadas à entidade.
 *
 * @author Paulo Henrique
 *
 * Date: 14/04/12
 */
class Model_Recurso extends Model_Util
{
    private $_codrec;
    private $_nomrec;
    private $_idtiprec;
    private $_nommarrec;
    private $_desatrirec;
    private $_numsal;
    private $_numpre;
    private $_statusrec;

    const TIPREC_EQUIPAMENTO     = 'E';
    const TIPREC_SALA            = 'S';
    const STATUSREC_DISPONIVEL   = 'D';
    const STATUSREC_INDISPONIVEL = 'I';

    /**
     * Metodo construtor da classe. Este permite duas construções: A primeira, onde o paramentro de codigo de usuario
     * recebe um codigo valido, cria um objeto com um registro já existente no banco de dados, a fim de atualizar os
     * dados do mesmo. No segundo caso, onde o codigo não é passado, o objeto poderá ser usado para salvar um novo
     * registro no banco de dados, ou retornar consultas SQL.
     *
     * @param null $codtur
     * @param null $codhor
     */
    public function __construct($codrec = null)
    {
        $this->_obterEntidade($codrec);
    }

    /**
     * Metodo getter do atributo de codigo do recurso.
     *
     * @return string
     */
    public function getCodrec()
    {
        return $this->_codrec;
    }

    /**
     * Metodo setter do atributo de codigo do recurso.
     *
     * @param $codrec
     */
    public function setCodrec($codrec)
    {
        $this->_codrec = $codrec;
    }

    /**
     * Metodo getter do atributo de nome do recurso.
     *
     * @return string
     */
    public function getNomrec()
    {
        return $this->_nomrec;
    }

    /**
     * Metodo setter do atributo de nome do recurso.
     *
     * @param $nomrec
     */
    public function setNomrec($nomrec)
    {
        $this->_nomrec= $nomrec;
    }

    /**
     * Metodo getter do atributo de id de tipo de recurso.
     *
     * @return string
     */
    public function getIdtiprec()
    {
        return $this->_idtiprec;
    }

    /**
     * Metodo setter do atributo de id de tipo de recurso.
     *
     * @param $idtiprec
     */
    public function setIdtiprec($idtiprec)
    {
        if ($idtiprec === self::TIPREC_EQUIPAMENTO || $idtiprec === self::TIPREC_SALA) {
            $this->_idtiprec = $idtiprec;
        }
        else
        {
            throw new Exception("Tipo de recurso não existente");

        }
    }

    /**
     * Metodo getter do atributo de nome da marca do recurso.
     *
     * @return string
     */
    public function getNommarrec()
    {
        return $this->_nommarrec;
    }

    /**
     * Metodo setter do atributo de nome da marca do recurso.
     *
     * @param $nommarrec
     */
    public function setNommarrec($nommarrec)
    {
        $this->_nommarrec= $nommarrec;
    }

    /**
     * Metodo getter do atributo de descricao dos atributos do recurso.
     *
     * @return string
     */
    public function getDesatrirec()
    {
        return $this->_desatrirec;
    }

    /**
     * Metodo setter do atributo de descricao dos atributos do recurso.
     *
     * @param $desatrirec
     */
    public function setDesatrirec($desatrirec)
    {
        $this->_desatrirec= $desatrirec;
    }

    /**
     * Metodo getter do atributo de numero da predio.
     *
     * @return string
     */
    public function getNumpre()
    {
        return $this->_numpre;
    }

    /**
     * Metodo setter do atributo de numero da predio.
     *
     * @param $numpre
     */
    public function setNumpre($numpre)
    {
        $this->_numpre = $numpre;
    }

    /**
     * Metodo getter do atributo de numero da predio.
     *
     * @return string
     */
    public function getNumsal()
    {
        return $this->_numsal;
    }

    /**
     * Metodo setter do atributo de numero da predio.
     *
     * @param $numsal
     */
    public function setNumsal($numsal)
    {
        $this->_numsal = $numsal;
    }

    /**
     * Metodo getter do atributo de status do equipamento.
     *
     * @return string
     */
    public function getStatusrec()
    {
        return $this->_statusrec;
    }

    /**
     * Metodo setter do atributo de status do recurso.
     *
     * @param $numpre
     */
    public function setStatusrec($statusrec)
    {
        if ($statusrec === self::STATUSREC_DISPONIVEL || $statusrec === self::STATUSREC_INDISPONIVEL)
        {
            $this->_statusrec = $statusrec;
        }
        else
        {
            throw new Exception("Status de recurso não reconhecido");

        }
    }

    public function persistir() {
        try
        {
            if ((bool)$this->getCodrec())
            {
                $campos = array(
                    "NOMREC"     => $this->getNomrec(),
                    "IDTIPREC"   => $this->getIdtiprec(),
                    "NOMMARREC"  => $this->getNommarrec(),
                    "DESATRIREC" => $this->getDesatrirec(),
                    "NUMSAL"     => $this->getNumsal(),
                    "NUMPRE"     => $this->getNumpre(),
                    "STATUSREC"  => $this->getStatusrec(),
                );
                return $this->_persistir("RECURSO", $campos, parent::MODO_UPDATE, "CODREC = ".$this->getCodrec());
            }
            else
            {
                $codrec = $this->_obterProximaChave("RECURSO", "CODREC");
                $campos = array(
                    "CODREC"     => $codrec,
                    "NOMREC"     => $this->getNomrec(),
                    "IDTIPREC"   => $this->getIdtiprec(),
                    "NOMMARREC"  => $this->getNommarrec(),
                    "DESATRIREC" => $this->getDesatrirec(),
                    "NUMSAL"     => $this->getNumsal(),
                    "NUMPRE"     => $this->getNumpre(),
                    "STATUSREC"  => $this->getStatusrec(),
                );

                $this->setCodrec($codrec);
                return $this->_persistir("RECURSO", $campos);
            }
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage(), $e->getCode());
        }
    }

    public function remover()
    {
        $this->_remover("RECURSO", "CODREC = ".$this->getCodrec());
    }

    private function _obterEntidade($codrec)
    {
        if ((bool)$codrec)
        {
            $sql    = "SELECT * FROM RECURSO WHERE CODREC = ".$codrec;
            $result = Statement::getInstance()->fetchRow($sql);

            if ((bool)$result)
            {
                try
                {
                    $this->setCodrec($result['CODREC']);
                    $this->setNomrec($result['NOMREC']);
                    $this->setIdtiprec($result['IDTIPREC']);
                    $this->setNommarrec($result['NOMMARREC']);
                    $this->setDesatrirec($result['DESATRIREC']);
                    $this->setNumsal($result['NUMSAL']);
                    $this->setNumpre($result['NUMPRE']);
                    $this->setStatusrec($result['STATUSREC']);
                }
                catch (Exception $e)
                {
                    throw new Exception($e->getMessage(), $e->getCode());
                }
            }
        }
    }

    public static function obterCorpoGrid($nome = null, $tipo = null)
    {
        $sql = "SELECT * FROM RECURSO WHERE 1 = 1";

        if ((bool)$nome)
        {
            $sql .= " AND UPPER(NOMREC) LIKE UPPER('$nome')";
        }

        if ((bool)$tipo)
        {
            $sql .= " AND IDTIPREC = '$tipo'";
        }

        $sql .= " ORDER BY CODREC";

        try
        {
            return Statement::getInstance()->fetchAll($sql);
        }
        catch(Exception $e)
        {
            throw new exception($e->getmessage(), $e->getcode());
        }
    }

    public static function obterSalaPorNumero($numsal, $numpre)
    {
        $codrec = self::_getSalaPorNumero($numsal, $numpre);

        $entidade = null;
        if ((bool)$codrec)
        {
            $entidade = new Model_Recurso($codrec);
        }
        else
        {
            $entidade = new Model_Recurso();
            $entidade->setNomrec("Sala $numsal - Predio $numpre");
            $entidade->setIdtiprec(Model_Recurso::TIPREC_SALA);
            $entidade->setNumsal($numsal);
            $entidade->setNumpre($numpre);
            $entidade->setStatusrec(Model_Recurso::STATUSREC_DISPONIVEL);
            $entidade->persistir();
        }

        return $entidade;
    }

    private static function _getSalaPorNumero($numsal, $numpre)
    {
        $sql = "SELECT CODREC
                FROM RECURSO
                WHERE NUMSAL = $numsal
                  AND NUMPRE = $numpre";

        return Statement::getInstance()->fetchOne($sql);
    }

    public static function obterTodosRecursosDisponíveis ($datini = null, $datfim = null)
    {
        //  A query abaixo retorna todos os equipamentos disponíveis, ou seja, todos aqueles que não estão marcados como
        // indisponivel, todos aqueles que nao estao reservados dentro do intervalo de datas da reserva corrente e
        // todos aqueles que nao estao associados a uma turma (este ultimo caso somente se adequa às salas.)
        //   Os campos retornados sao o codigo do equipamento, e uma String que poderá assumir duas formas: No caso
        // do equipamento ser uma sala, ele aparecerá no formato <nome da sala> - Sala<numero da sala> -
        // Predio <numero do predio>. No caso de equipamentos, aparecerá <nome do equipamento> - <marca do equip.>.
        $sql = "SELECT CODREC,
                  CASE WHEN IDTIPREC = 'S' THEN
                    NOMREC||' - '||' SALA '||NUMSAL||' - PREDIO '||NUMPRE
                  ELSE
                    NOMREC||' - '||NOMMARREC
                  END NOMREC
                FROM RECURSO REC
                WHERE STATUSREC = 'D'
                  AND NOT EXISTS (
                    SELECT 1
                    FROM RESERVA RES
                    INNER JOIN ITEMRESERVA IR
                      ON IR.CODRES = IR.CODRES
                    WHERE IR.CODREC = REC.CODREC
                      AND (
                        '$datini' BETWEEN RES.DATINI AND RES.DATFIM
                        OR '$datfim' BETWEEN RES.DATINI AND RES.DATFIM
                      )
                  )
                  AND NOT EXISTS(
                    SELECT 1
                    FROM TURMA
                    WHERE REC.CODREC = CODSAL
                  )";

        return Statement::getInstance()->fetchAll($sql);
    }

}