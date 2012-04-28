<?php
include("statement/statement.php");
include("statement/util.php");

/**
 *     Classe que representa a entidade Recurso. Aqui, serão implementados os métodos de persistência, exclusão, getters
 * e setters dos atributos, além de consultas relacionadas à entidade.
 *     Neste sistema, recursos são todos os ítens sob responsabilidade do setor de infra-estrutura. Então, são classi-
 * ficados como recursos os equipamentos (ex.: projetores) ou salas(ex.: laboratorios).
 *
 * @author Paulo Henrique
 *
 * @data 04/04/2012
 *
 * @todo Como ainda não foi desenvolvida a entidade de usuário, os códigos de operador de inclusão e operador de
 * atualização ainda não serão inseridos.
 */
class Model_Recurso
{
    /**
     * Código do recurso. Chave primária no banco de dados.
     *
     * @var integer
     */
    private $_cdrecurso;
    /**
     * Descrição do recurso: Aqui, o recurso será identificado. Ex.: "Projetor".
     *
     * @var String
     */
    private $_dsrecurso;
    /**
     * Define o tipo de recurso. Este pode ser equipamento ou sala.
     *
     * @var integer
     */
    private $_tprecurso;
    /**
     * Marca do equipamento. Este campo tem sentido somente para equipamentos.
     *
     * @var string
     */
    private $_dsmarcarec;
    /**
     * Descrição dos atributos do recurso. Exemplos de atributos: configurações de um computador, quantidade de compu-
     * tadores em um laboratório.
     *
     * @var string
     */
    private $_dsatribrec;
    /**
     * Representa o numero da sala. Somente faz sentido para recursos do tipo sala.
     *
     * @var integer.
     */
    private $_nrsala;
    /**
     * Representa o numero do predio onde fica a sala. Somente faz sentido para recursos do tipo sala.
     *
     * @var integer
     */
    private $_nrpredio;
    /**
     * Data de inclusão do recurso no sistema.
     *
     * @var String
     */
    private $_dtinclusao;
    /**
     * Data da última atualização do registro no sistema.
     *
     * @var string
     */
    private $_dtatualizacao;
    /**
     * Codigo do operador de inclusão do equipamento.
     *
     * @var integer
     */
    private $_cdoperinclusao;
    /**
     * Codigo do operador da última atualização do recurso no sistema
     *
     * @var
     */
    private $_cdoperatualizacao;

    /**
     * Constantes para identificação dos tipos de equipamentos.
     */
    const TIPO_EQUIPAMENTO = 1;
    const TIPO_SALA        = 2;


    public function __construct($cdrecurso = null)
    {
        $this->_obterEntidade($cdrecurso);
    }

    /**
     * Metodo setter do atributo _cdoperatualizacao
     *
     * @param  $cdoperatualizacao
     */
    public function setCdoperatualizacao($cdoperatualizacao)
    {
        $this->_cdoperatualizacao = $cdoperatualizacao;
    }

    /**
     * Método getter do atributo _cdoperatualizacao
     *
     * @return
     */
    public function getCdoperatualizacao()
    {
        return $this->_cdoperatualizacao;
    }

    /**
     * Metodo setter do atributo _cdoperinclusao
     *
     * @param int $cdoperinclusao
     */
    public function setCdoperinclusao($cdoperinclusao)
    {
        $this->_cdoperinclusao = $cdoperinclusao;
    }

    /**
     * Método getter do atributo _cdoperinclusao
     *
     * @return int
     */
    public function getCdoperinclusao()
    {
        return $this->_cdoperinclusao;
    }

    /**
     * Metodo setter do atributo _cdrecurso
     *
     * @param int $cdrecurso
     */
    public function setCdrecurso($cdrecurso)
    {
        $this->_cdrecurso = $cdrecurso;
    }

    /**
     * Método getter do atributo _cdrecurso
     *
     * @return int
     */
    public function getCdrecurso()
    {
        return $this->_cdrecurso;
    }

    /**
     * Metodo setter do atributo _dsatribrec
     *
     * @param string $dsatribrec
     */
    public function setDsatribrec($dsatribrec)
    {
        $this->_dsatribrec = $dsatribrec;
    }

    /**
     * Método getter do atributo _dsatribrec
     *
     * @return string
     */
    public function getDsatribrec()
    {
        return $this->_dsatribrec;
    }

    /**
     * Metodo setter do atributo _dsmarcarec
     *
     * @param string $dsmarcarec
     */
    public function setDsmarcarec($dsmarcarec)
    {
        $this->_dsmarcarec = $dsmarcarec;
    }

    /**
     * Método getter do atributo _dsmarcarec
     *
     * @return string
     */
    public function getDsmarcarec()
    {
        return $this->_dsmarcarec;
    }

    /**
     * Metodo setter do atributo _dsrecurso
     *
     * @param \String $dsrecurso
     */
    public function setDsrecurso($dsrecurso)
    {
        $this->_dsrecurso = $dsrecurso;
    }

    /**
     * Método getter do atributo _dsrecurso
     *
     * @return \String
     */
    public function getDsrecurso()
    {
        return $this->_dsrecurso;
    }

    /**
     * Metodo setter do atributo _dtatualizacao
     *
     * @param string $dtatualizacao
     */
    public function setDtatualizacao($dtatualizacao)
    {
        $this->_dtatualizacao = $dtatualizacao;
    }

    /**
     * Método getter do atributo _dtatualizacao
     *
     * @return string
     */
    public function getDtatualizacao()
    {
        return $this->_dtatualizacao;
    }

    /**
     * Metodo setter do atributo _dtinclusao
     *
     * @param \String $dtinclusao
     */
    public function setDtinclusao($dtinclusao)
    {
        $this->_dtinclusao = $dtinclusao;
    }

    /**
     * Método getter do atributo _dtinclusao
     *
     * @return \String
     */
    public function getDtinclusao()
    {
        return $this->_dtinclusao;
    }

    /**
     * Metodo setter do atributo _nrpredio
     *
     * @param int $nrpredio
     */
    public function setNrpredio($nrpredio)
    {
        $this->_nrpredio = $nrpredio;
    }

    /**
     * Método getter do atributo _nrpredio
     *
     * @return int
     */
    public function getNrpredio()
    {
        return $this->_nrpredio;
    }

    /**
     * Metodo setter do atributo _nrsala
     *
     * @param int $nrsala
     */
    public function setNrsala($nrsala)
    {
        $this->_nrsala = $nrsala;
    }

    /**
     * Método getter do atributo _nrsala
     *
     * @return int
     */
    public function getNrsala()
    {
        return $this->_nrsala;
    }

    /**
     * Metodo setter do atributo _tprecurso
     *
     * @param int $tprecurso
     */
    public function setTprecurso($tprecurso)
    {
        $this->_tprecurso = $tprecurso;
    }

    /**
     * Método getter do atributo _tprecurso
     *
     * @return int
     */
    public function getTprecurso()
    {
        return $this->_tprecurso;
    }

    /**
     * Metodo usado para persistencia
     *
     * @return int
     * @throws Exception
     */
    public function persistir()
    {
        try {
            if ($this->getCdrecurso() === null)
            {
                return $this->_insert();
            }
            else
            {
                return $this->_update();
            }
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage(), $e->getCode());
        }
    }

    /**
     * Metodo usado para remocao de um registro de recurso.
     *
     * @return int
     * @throws Exception
     */
    public function remover()
    {
        try
        {
            if ($this->getCdrecurso() === null)
            {
                throw new Exception("Uma Instância nula não pode ser removida.");
            }

            $sql = "DELETE FROM RECURSO
                    WHERE CDRECURSO = ".$this->getCdrecurso();
            return Statement::getInstance()->execute($sql);
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage(), $e->getCode());
        }
    }

    /**
     * Retorna o resultado da query que será usada para a formação do grid da visualização de recursos. Este retornará
     * todos os registros da tabela, a menos que este seja filtrado (este filtro será feito pelo nome do recurso).
     *
     * @param string  $nome Nome ou parte do nome do(s) recurso(s) pesquisados.
     * @param integer $tipo Tipo pesquisado.
     * @return array
     * @throws Exception
     */
    public function obterCorpoGrid($nome = null, $tipo = null)
    {
        $sql = "SELECT * FROM RECURSO ";
        $where = null;
        if ($nome != null)
        {
            $where = " UPPER(DSRECURSO) LIKE UPPER('$nome%') ";
        }

        if ($tipo != null && $tipo != 0)
        {
            if ($where != null) {
                $where .= " AND TPRECURSO = $tipo";
            }
            else
            {
                $where = " TPRECURSO = $tipo";
            }
        }

        if ($where != null)
        {
            $sql .= "WHERE $where";
        }

        try
        {
            return Statement::getInstance()->fetchAll($sql);
        }
        catch (Exception $e) {
            throw new Exception($e->getMessage(), $e->getCode());
        }
    }

    /**
     * Constrói uma instancia de um recurso, identificada pela chave.
     *
     * @param integer $cdrecurso Chave da entidade Recurso.
     *
     * @return Model_Recurso
     *
     * @throws Exception
     */
    private function _obterEntidade($cdrecurso = null)
    {
        $result = null;
        if ($cdrecurso !== null)
        {
            $sql    = "SELECT * FROM RECURSO WHERE CDRECURSO = $cdrecurso";
            $result = Statement::getInstance()->fetchRow($sql);
            if ($result !== null)
            {
                try {
                    $this->setCdrecurso($result["CDRECURSO"]);
                    $this->setDsrecurso($result["DSRECURSO"]);
                    $this->setTprecurso($result["TPRECURSO"]);
                    $this->setDsmarcarec($result["DSMARCAREC"]);
                    $this->setDsatribrec($result["DSATRIBREC"]);
                    $this->setNrsala($result["NRSALA"]);
                    $this->setNrpredio($result["NRPREDIO"]);
                    $this->setDtinclusao($result["DTINCLUSAO"]);
                    $this->setDtatualizacao($result["DTATUALIZACAO"]);
                    $this->setCdoperinclusao($result["CDOPERINCLUSAO"]);
                    $this->setCdoperatualizacao($result["CDOPERATUALIZACAO"]);
                }
                catch (Exception $e)
                {
                    throw new Exception($e->getMessage(), $e->getCode());
                }
            }
        }

        return $this;
    }

    /**
     * Metodo auxiliar do metodo principal persistir, que será usado sempre que a entidade persisida se
     * tratar de um novo recurso cadastrado.
     *
     * @return int
     *
     * @throws Exception
     */
    private function _insert()
    {
        if ($this->getCdrecurso() === null)
        {
            $this->setCdrecurso(Util::obterProximaChave("RECURSO", "CDRECURSO"));
        }

        $sql = "INSERT INTO RECURSO
                VALUES(
                    " . $this->getCdrecurso() . ",
                    '" . $this->getDsrecurso() . "',
                    " . $this->getTprecurso() . ",
                    '" . $this->getDsmarcarec() . "',
                    '" . $this->getDsatribrec() . "',
                    " . (($this->getNrsala() != null) ? $this->getNrsala() : "null") . ",
                    " . (($this->getNrpredio() != null) ? $this->getNrpredio() : "null") . ",
                    SYSDATE,
                    SYSDATE,
                    1,
                    1
                )";
//                    CDOPERINCLUSAO    = " . $this->getCdoperinclusao() . ",
//                    CDOPERATUALIZACAO = " . $this->getCdoperatualizacao() . "

        try
        {
            return Statement::getInstance()->execute($sql);
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage(), $e->getCode());
        }
    }

    /**
     * Metodo auxiliar do metodo principal de persistir. Este sempre será chamado quando se tratar de persistência
     * de um recurso já cadastrado e houve somente uma atualização.
     *
     * @return int
     * @throws Exception
     */
    private function _update()
    {
        $sql = "UPDATE RECURSO
                SET
                    DSRECURSO         = '" . $this->getDsrecurso() . "',
                    TPRECURSO         = " . $this->getTprecurso() . ",
                    DSMARCAREC        = '" . $this->getDsmarcarec() . "',
                    DSATRIBREC        = '" . $this->getDsatribrec() . "',
                    NRSALA            = " . (($this->getNrsala() != null) ? $this->getNrsala() : "null") . ",
                    NRPREDIO          = " . (($this->getNrpredio() != null) ? $this->getNrpredio() : "null") . ",
                    DTATUALIZACAO     = SYSDATE,
                    CDOPERINCLUSAO    = 1,
                    CDOPERATUALIZACAO = 1
                WHERE CDRECURSO = ".$this->getCdrecurso();
//                    CDOPERINCLUSAO    = " . $this->getCdoperinclusao() . ",
//                    CDOPERATUALIZACAO = " . $this->getCdoperatualizacao() .
        try
        {
            return Statement::getInstance()->execute($sql);
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage(), $e->getCode());
        }
    }
}