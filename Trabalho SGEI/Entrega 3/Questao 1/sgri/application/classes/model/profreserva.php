<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Paulo
 * Date: 10/06/12
 * Time: 16:55
 * To change this template use File | Settings | File Templates.
 */
class Model_Profreserva extends Model_Util
{
    private $_codres;
    private $_codfun;


    public function setCodfun($codfun)
    {
        $this->_codfun = $codfun;
    }

    public function getCodfun()
    {
        return $this->_codfun;
    }

    public function setCodres($codres)
    {
        $this->_codres = $codres;
    }

    public function getCodres()
    {
        return $this->_codres;
    }

    public function persistir()
    {
        try
        {
            if ((bool)$this->getcodfun())
            {
                $campos = array(
                    "CODRES" => $this->getCodres(),
                    "CODFUN" => $this->getCodfun(),
                );
                return $this->_persistir("PROFRESERVA", $campos, parent::MODO_UPDATE, "codfun = ".$this->getCodfun());
            }
            else
            {
                $campos = array(
                    "CODRES" => $this->getCodres(),
                    "CODFUN" => $this->getCodfun(),
                );
                return $this->_persistir("PROFRESERVA", $campos);
            }
        }
        catch(Exception $e)
        {
            throw new Exception($e->getMessage(), $e->getCode());
        }
    }

    public function remover()
    {
        $this->_remover("PROFRESERVA", "codfun = ".$this->getCodfun()." AND CODRES = ".$this->getCodres());
    }

    private function _obterEntidade($codfun, $codres)
    {
        if ((bool)$codfun)
        {
            $sql    = "SELECT * FROM horario where codfun = ".$codfun." AND CODRES = ".$codres;
            $result = Statement::getInstance()->fetchRow($sql);
            if ((bool)$result)
            {
                try
                {
                    $this->setCodres($result["CODRES"]);
                    $this->setCodfun($result["CODFUN"]);
                }
                catch (Exception $e)
                {
                    throw new Exception($e->getMessage(), $e->getCode());
                }
            }
        }
    }

}