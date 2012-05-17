<?php
/**
 * Classe que representa a entidade de Tipo de Usuario.
 * User: Paulo
 * Date: 24/04/12
 * Time: 20:38
 */
class Model_TipoUsuario
{
    /**
     * Codigo do tipo do usuario.
     *
     * @var
     */
    private $_cdtpusu;
    /**
     * Nome do tipo do usuario.
     *
     * @var
     */
    private $_nmtpusu;
    /**
     * Data de inclusão
     *
     * @var
     */
    private $_dtinclusao;
    /**
     * Data de atualização
     *
     * @var
     */
    private $_dtatualizacao;
    /**
     * Operador de Inclusão.
     *
     * @var
     */
    private $_cdoperinclusao;
    /**
     * Operador de atualização.
     *
     * @var
     */
    private $_cdoperatualizacao;


    /**
     * Metodo setter do atributo cdoperatualizacao.
     *
     * @param $cdoperatualizacao
     */
    public function setCdoperatualizacao($cdoperatualizacao)
    {
        $this->_cdoperatualizacao = $cdoperatualizacao;
    }

    /**
     * Metodo getter do atributo cdoperatualizacao.
     *
     * @return mixed
     */
    public function getCdoperatualizacao()
    {
        return $this->_cdoperatualizacao;
    }

    /**
     * Metodo setter do atributo cdoperinclusao.
     *
     * @param $cdoperinclusao
     */
    public function setCdoperinclusao($cdoperinclusao)
    {
        $this->_cdoperinclusao = $cdoperinclusao;
    }

    /**
     * Metodo getter do atributo cdoperinclusao.
     *
     * @return mixed
     */
    public function getCdoperinclusao()
    {
        return $this->_cdoperinclusao;
    }

    /**
     * Metodo setter do atributo cdtpusu.
     *
     * @param $cdtpusu
     */
    public function setCdtpusu($cdtpusu)
    {
        $this->_cdtpusu = $cdtpusu;
    }

    /**
     * Metodo getter do atributo cdtpusu.
     *
     * @return mixed
     */
    public function getCdtpusu()
    {
        return $this->_cdtpusu;
    }

    /**
     * Metodo setter do atributo dtatualizacao.
     *
     * @param $dtatualizacao
     */
    public function setDtatualizacao($dtatualizacao)
    {
        $this->_dtatualizacao = $dtatualizacao;
    }

    /**
     * Metodo getter do atributo dtatualizacao.
     *
     * @return mixed
     */
    public function getDtatualizacao()
    {
        return $this->_dtatualizacao;
    }

    /**
     * Metodo setter do atributo dtinclusao.
     *
     * @param $dtinclusao
     */
    public function setDtinclusao($dtinclusao)
    {
        $this->_dtinclusao = $dtinclusao;
    }

    /**
     * Metodo getter do atributo dtinclusao.
     *
     * @return mixed
     */
    public function getDtinclusao()
    {
        return $this->_dtinclusao;
    }

    /**
     * Metodo setter do atributo nmtpusu.
     *
     * @param $nmtpusu
     */
    public function setNmtpusu($nmtpusu)
    {
        $this->_nmtpusu = $nmtpusu;
    }

    /**
     * Metodo getter do atributo nmtpusu.
     *
     * @return mixed
     */
    public function getNmtpusu()
    {
        return $this->_nmtpusu;
    }

    /**
     * Retorna nome e código de todos os tipos de usuários existentes no sistema.
     *
     * @return array
     */
    public function obterTodosTipos()
    {
        $sql = "SELECT CDTPUSU, NMTPUSU FROM TIPOUSUARIO";

        return Statement::getInstance()->fetchAll($sql);
    }
}