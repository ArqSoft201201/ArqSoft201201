<?php
// include("statement/util.php");

/**
 * Classe que representa a entidade Usuario. Aqui, serão implementados os métodos de persistência, exclusão, getters
 * e setters dos atributos, além de consultas relacionadas à entidade.
 *
 * @author Paulo Henrique
 *
 * Date: 14/04/12
 */
class Model_Usuario extends Model_Util
{
    private $_codusu;
    private $_codfun;
    private $_logusu;
    private $_senusu;
    private $_idsituativ;

    /**
     * Metodo construtor da classe. Este permite duas construções: A primeira, onde o paramentro de codigo de usuario
     * recebe um codigo valido, cria um objeto com um registro já existente no banco de dados, a fim de atualizar os
     * dados do mesmo. No segundo caso, onde o codigo não é passado, o objeto poderá ser usado para salvar um novo
     * registro no banco de dados, ou retornar consultas SQL.
     *
     * @param null $coddis
     */
    public function __construct($codusu = null)
    {
        $this->_obterEntidade($codusu);
    }

    /**
     * Metodo getter do atributo de codigo do usuario.
     *
     * @return string
     */
    public function getCodusu()
    {
        return $this->_codusu;
    }

    /**
     * Metodo setter do atributo de codigo do usuario.
     *
     * @param $codusu
     */
    public function setCodusu($codusu)
    {
        $this->_codusu = $codusu;
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
     * Metodo getter do atributo de login de usuario.
     *
     * @return string
     */
    public function getLogusu()
    {
        return $this->_logusu;
    }

    /**
     * Metodo setter do atributo de login de usuario.
     *
     * @param $logusu
     */
    public function setLogusu($logusu)
    {
        $this->_logusu = $logusu;
    }

    /**
     * Metodo getter do atributo de senha de usuario.
     *
     * @return string
     */
    public function getSenusu()
    {
        return $this->_senusu;
    }

    /**
     * Metodo setter do atributo de senha do usuario.
     *
     * @param $codfun
     */
    public function setSenusu($senusu)
    {
        $this->_senusu = $senusu;
    }

    /**
     * Metodo getter do atributo de id de usuario ativo.
     *
     * @return string
     */
    public function getIdusuativ()
    {
        return $this->_idsituativ;
    }

    /**
     * Metodo setter do atributo de id de usuario ativo.
     *
     * @param $idusuativ
     */
    public function setIdsituativ($idusuativ)
    {
        $this->_idsituativ = $idusuativ;
    }

    public function persistir()
    {
        try
        {
            if ((bool)$this->getCodusu())
            {
                $campos = array(
                    "CODFUN"     => $this->getCodfun(),
                    "LOGUSU"     => $this->getLogusu(),
                    "SENUSU"     => $this->getSenusu(),
                    "IDSITUATIV" => $this->getIdusuativ(),
                );

                return $this->_persistir("USUARIO", $campos, parent::MODO_UPDATE, "CODUSU = ".$this->getCodusu());
            }
            else
            {
                $campos = array(
                    "CODUSU"     => $this->_obterProximaChave("USUARIO", "CODUSU"),
                    "CODFUN"     => $this->getCodfun(),
                    "LOGUSU"     => $this->getLogusu(),
                    "SENUSU"     => $this->getSenusu(),
                    "IDSITUATIV" => $this->getIdusuativ(),
                );

                return $this->_persistir("USUARIO", $campos);
            }
        }
        catch(Exception $e)
        {
            throw new Exception($e->getMessage(), $e->getCode());
        }
    }

    public function remover()
    {
        $this->_remover("USUARIO", "CODUSU = ".$this->getCodusu());
    }

    private function _obterEntidade($codusu)
    {
        if ((bool)$codusu)
        {
            $sql    = "SELECT * FROM USUARIO WHERE CODUSU = ".$codusu;
            $result = Statement::getInstance()->fetchRow($sql);

            if ((bool)$result)
            {
                try
                {
                    $this->setCodusu($result["CODUSU"]);
                    $this->setCodfun($result["CODFUN"]);
                    $this->setLogusu($result["LOGUSU"]);
                    $this->setSenusu($result["SENUSU"]);
                    $this->setIdsituativ($result["IDSITUATIV"]);
                }
                catch (Exception $e)
                {
                    throw new Exception($e->getMessage(), $e->getCode());
                }
            }
        }
    }

    public static function obterUsuarioLogin($login, $senha)
    {
        $sql = "SELECT CODUSU
                FROM USUARIO
                WHERE LOGUSU = '$login'
                  AND SENUSU = '".sha1($senha)."'";
        return Statement::getInstance()->fetchOne($sql);
    }

    public static function obterCorpoGrid($logusu = null)
    {
        $sql = "SELECT U.CODUSU,
                  U.CODFUN,
                  F.NOMFUN,
                  U.LOGUSU,
                  U.SENUSU,
                  CASE WHEN IDSITUATIV = 'A'
                    THEN 'ATIVO'
                    ELSE 'INATIVO'
                  END AS IDSITUATIV
                FROM USUARIO U, FUNCIONARIO F
                WHERE U.CODFUN = F.CODFUN ";
        if ((bool)$logusu)
        {
            $sql .= " AND UPPER(LOGUSU) LIKE UPPER('%$logusu%') ";
        }

        return Statement::getInstance()->fetchAll($sql);
    }
}