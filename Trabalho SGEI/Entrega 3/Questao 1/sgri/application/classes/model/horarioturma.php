<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Paulo
 * Date: 10/06/12
 * Time: 16:55
 * To change this template use File | Settings | File Templates.
 */
class Model_Horarioturma extends Model_Util
{
    private $_codtur;
    private $_codhor;


    public function setCodhor($codhor)
    {
        $this->_codhor = $codhor;
    }

    public function getCodhor()
    {
        return $this->_codhor;
    }

    public function setCodtur($codtur)
    {
        $this->_codtur = $codtur;
    }

    public function getCodtur()
    {
        return $this->_codtur;
    }

    public function persistir()
    {
        try
        {
            $campos = array(
                "CODTUR" => $this->getCodtur(),
                "CODHOR" => $this->getCodhor(),
            );
            return $this->_persistir("HORARIOTURMA", $campos);
        }
        catch(Exception $e)
        {
            throw new Exception($e->getMessage(), $e->getCode());
        }
    }

    public function remover()
    {
        $this->_remover("HORARIOTURMA", "CODHOR = ".$this->getCodhor()." AND CODTUR = ".$this->getCodtur());
    }

    private function _obterEntidade($codhor, $codtur)
    {
        if ((bool)$codhor)
        {
            $sql    = "SELECT * FROM HORARIO WHERE CODHOR = ".$codhor." AND CODTUR = ".$codtur;
            $result = Statement::getInstance()->fetchRow($sql);
            if ((bool)$result)
            {
                try
                {
                    $this->setCodtur($result["CODTUR"]);
                    $this->setCodhor($result["CODHOR"]);
                }
                catch (Exception $e)
                {
                    throw new Exception($e->getMessage(), $e->getCode());
                }
            }
        }
    }

    public static function obterHorariosTurmas($codtur)
    {
        $sql = "SELECT DIASEM||' - '||TO_CHAR(HORINI, 'HH24:MI')||' - '||TO_CHAR(HORFIM, 'HH24:MI') HORARIO, H.CODHOR
                  FROM HORARIOTURMA HT, HORARIO H
                  WHERE HT.CODHOR = H.CODHOR
                    AND HT.CODTUR = $codtur";

        return Statement::getInstance()->fetchAll($sql);
    }

}