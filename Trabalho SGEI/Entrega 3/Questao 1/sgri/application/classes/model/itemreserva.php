<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Paulo
 * Date: 10/06/12
 * Time: 16:55
 * To change this template use File | Settings | File Templates.
 */
class Model_Itemreserva extends Model_Util
{
    private $_codres;
    private $_codrec;


    public function __construct($codres = null, $codrec = null)
    {
        $this->_obterEntidade($codrec, $codres);
    }

    public function setCodrec($codrec)
    {
        $this->_codrec = $codrec;
    }

    public function getCodrec()
    {
        return $this->_codrec;
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
            $campos = array(
                "CODRES" => $this->getCodres(),
                "CODREC" => $this->getCodrec(),
            );
            return $this->_persistir("ITEMRESERVA", $campos);
        }
        catch(Exception $e)
        {
            throw new Exception($e->getMessage(), $e->getCode());
        }
    }

    public function remover()
    {
        $this->_remover("ITEMRESERVA", "CODREC = ".$this->getCodrec()." AND CODRES = ".$this->getCodres());
    }

    private function _obterEntidade($codrec, $codres)
    {
        if ((bool)$codrec)
        {
            $sql    = "SELECT * FROM HORARIO WHERE CODREC = ".$codrec." AND CODRES = ".$codres;
            $result = Statement::getInstance()->fetchRow($sql);
            if ((bool)$result)
            {
                try
                {
                    $this->setCodres($result["CODRES"]);
                    $this->setCodrec($result["CODREC"]);
                }
                catch (Exception $e)
                {
                    throw new Exception($e->getMessage(), $e->getCode());
                }
            }
        }
    }

    public static function obterItemReserva($codres, $codrec = null)
    {
        $sql = "SELECT IT.CODREC,
                  CASE WHEN IDTIPREC = 'S' THEN
                    NOMREC||' - '||'SALA '||NUMSAL||' - PREDIO '||NUMPRE
                  ELSE
                    NOMREC||' - '||NOMMARREC
                  END NOMREC
                FROM ITEMRESERVA IT, RECURSO R
                WHERE IT.CODREC = R.CODREC
                  AND CODRES = '$codres'";

        if ($codrec)
        {
            $sql .= "AND CODREC = $codrec";
        }

        return Statement::getInstance()->fetchAll($sql);
    }

}