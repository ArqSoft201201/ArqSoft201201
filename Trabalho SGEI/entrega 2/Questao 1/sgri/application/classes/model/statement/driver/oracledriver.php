<?php
include("driver.php");
class OracleDriver extends Driver
{
    /**
     * Construtor da classe concreta de driver Oracle.
     *
     * @param string $user     Usuario.
     * @param string $password Senha.
     * @param string $host     Host do banco de dados.
     * @param string $dbName   SID do banco.
     */
    public function __construct($user, $password, $host, $dbName)
    {
        parent::__construct($user, $password, $host, $dbName);
        $tns = "  
			(DESCRIPTION =
				(ADDRESS_LIST =
				  (ADDRESS = (PROTOCOL = TCP)(HOST = $host)(PORT = 1521))
				)
				(CONNECT_DATA =
				  (SERVICE_NAME = $dbName)
				)
			  )";

        try {
            $conn = new PDO("oci:dbname=" . $tns.";charset=UTF8", $this->getUser(), $this->getPassword());
            $this->setConnection($conn);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        $this->setDb(DriverFactory::ORACLE_DRIVER);
    }
}