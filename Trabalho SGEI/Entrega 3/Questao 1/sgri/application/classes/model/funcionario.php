<?php
// include("statement/util.php");

/**
 * Classe que representa a entidade Funcionario. Aqui, serão implementados os métodos de persistência, exclusão, getters
 * e setters dos atributos, além de consultas relacionadas à entidade.
 *
 * @author Paulo Henrique
 *
 * Date: 14/04/12
 */
class Model_Funcionario extends Model_Util
{
    private $_codfun;
    private $_nomfun;
    private $_codtipfun;
    private $_emailfun;
    private $_rgfun;
    private $_cpffun;
    private $_numtelfun;

    /**
     * Metodo construtor da classe. Este permite duas construções: A primeira, onde o paramentro de codigo de usuario
     * recebe um codigo valido, cria um objeto com um registro já existente no banco de dados, a fim de atualizar os
     * dados do mesmo. No segundo caso, onde o codigo não é passado, o objeto poderá ser usado para salvar um novo
     * registro no banco de dados, ou retornar consultas SQL.
     *
     * @param null $codfun
     */
    public function __construct($codfun = null) {
        $this->_obterEntidade($codfun);
    }

    /**
     * Metodo getter do atributo de  codigo do funcionario
     *
     * @return
     */
    public function getCodfun()
    {
        return $this->_codfun;
    }

    /**
     * Metodo setter do atributo de codigo do funcionario
     *
     * @param
     */
    public function setCodfun($codfun)
    {
        $this->_codfun = $codfun;
    }

    /**
     * Metodo getter do atributo de nome do funcionario
     *
     * @return
     */
    public function getNomFun()
    {
        return $this->_nomfun;
    }

    /**
     * Metodo setter do atributo de nome do funcionario
     *
     * @param
     */
    public function setNomfun($nomfun)
    {
        $this->_nomfun = $nomfun;
    }

    /**
     * Metodo getter do atributo de  codigo do tipo de funcionario
     *
     * @return
     */
    public function getCodtipfun()
    {
        return $this->_codtipfun;
    }

    /**
     * Metodo setter do atributo de codigo do tipo de funcionario.
     *
     * @param
     */
    public function setCodtipfun($codtipfun)
    {
        $this->_codtipfun = $codtipfun;
    }

    /**
     * Metodo getter do atributo de  RG do funcionario.
     *
     * @return
     */
    public function getRgfun()
    {
        return $this->_rgfun;
    }

    /**
     * Metodo setter do atributo de  RG do funcionario.
     *
     * @param
     */
    public function setRgfun($rgfun)
    {
        $this->_rgfun = $rgfun;
    }

    /**
     * Metodo getter do atributo de CPF do funcionario
     *
     * @return
     */
    public function getCpffun()
    {
        return $this->_cpffun;
    }

    /**
     * Metodo setter do atributo de CPF do funcionario
     *
     * @param
     */
    public function setCpffun($cpffun)
    {
        $this->_cpffun = $cpffun;
    }

    /**
     * Metodo getter do atributo de numero de telefone do funcionario
     *
     * @return
     */
    public function getNumtelfun()
    {
        return $this->_numtelfun;
    }

    /**
     * Metodo setter do atributo de
     *
     * @param
     */
    public function setNumtelfun($numtelfun)
    {
        $this->_numtelfun = $numtelfun;
    }

    /**
     * Metodo getter do atributo de numero de email do funcionario
     *
     * @return
     */
    public function getEmailfun()
    {
        return $this->_numtelfun;
    }

    /**
     * Metodo setter do atributo de
     *
     * @param
     */
    public function setEmailfun($numtelfun)
    {
        $this->_numtelfun = $numtelfun;
    }

    public function persistir()
    {
        try
        {
            if ((bool)$this->getCodfun())
            {
                $campos = array(
                    "NOMFUN"    => $this->getNomFun(),
                    "CODTIPFUN" => $this->getCodtipfun(),
                    "RGFUN"     => $this->getRgfun(),
                    "CPFFUN"    => $this->getCpffun(),
                    "EMAILFUN"  => $this->getEmailfun(),
                    "NUMTELFUN" => $this->getNumtelfun()
                );
                return $this->_persistir("FUNCIONARIO", $campos, parent::MODO_UPDATE, "CODFUN = ".$this->getCodfun());
            }
            else
            {
                $campos = array(
                    "CODFUN"    => $this->_obterProximaChave("FUNCIONARIO", "CODFUN"),
                    "NOMFUN"    => $this->getNomFun(),
                    "CODTIPFUN" => $this->getCodtipfun(),
                    "RGFUN"     => $this->getRgfun(),
                    "CPFFUN"    => $this->getCpffun(),
                    "EMAILFUN"  => $this->getEmailfun(),
                    "NUMTELFUN" => $this->getNumtelfun()
                );
                return $this->_persistir("FUNCIONARIO", $campos);
            }
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage(), $e->getCode());
        }
    }

    public function remover()
    {
        $this->_remover("FUNCIONARIO", "CODFUN = ".$this->getCodfun());
    }

    private function _obterEntidade($codfun)
    {

        if ((bool)$codfun)
        {
            $sql    = "SELECT * FROM FUNCIONARIO WHERE CODFUN = ".$codfun;
            $result = Statement::getInstance()->fetchRow($sql);

            if ((bool)$result)
            {
                try
                {
                    $this->setCodfun($result["CODFUN"]);
                    $this->setNomfun($result["CODTIPFUN"]);
                    $this->setCodtipfun($result["CODTIPFUN"]);
                    $this->setRgfun($result["RGFUN"]);
                    $this->setCpffun($result["CPFFUN"]);
                    $this->setEmailfun($result["EMAILFUN"]);
                    $this->setNumtelfun($result["NUMTELFUN"]);
                }
                catch (Exception $e)
                {
                    throw new Exception($e->getMessage(), $e->getCode());
                }
            }
        }
    }

    public static function obterTodosFuncionariosSemUsuario($codusu = null)
    {
        $sql = "SELECT CODFUN, NOMFUN
                FROM FUNCIONARIO F
                WHERE NOT EXISTS (
                  SELECT 1
                  FROM USUARIO U
                  WHERE U.CODFUN = F.CODFUN
                )";
        if ((bool)$codusu) {
            $sql .= " OR CODFUN = (SELECT CODFUN FROM USUARIO WHERE CODUSU = $codusu)";
        }

        return Statement::getInstance()->fetchAll($sql);
    }

}