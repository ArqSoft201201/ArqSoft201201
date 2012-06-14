<?php

class Database_Oracle {
    const USERNAME  = "SGRI";
    const PASSOWORD = "SGRI";
    const HOST      = "localhost";

    private $_pdo;
    private static $_singleton;

    private function __construct() {
        $tns = "
                (DESCRIPTION =
                    (ADDRESS_LIST =
                      (ADDRESS = (PROTOCOL = TCP)(HOST = ".self::HOST.")(PORT = 1521))
                    )
                    (CONNECT_DATA =
                      (SERVICE_NAME = xe)
                    )
                  )";

        $conn = new PDO("oci:dbname=".$tns,self::USERNAME,self::PASSOWORD);

    }

    public function __clone() {
        return false;
    }

    public static function getInstance() {
        if (self::$_singleton === null) {
            self::$_singleton = new DbAcess();
        }

        return self::$_singleton;
    }

    public function select($sql) {
        try {
            $this->_pdo->beginTransaction();
            $stmt = $this->_pdo->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
            $this->_pdo->commit();
            return $result;
        } catch (Exception $e) {
            $this->_pdo->rollBack();
            $e->getMessage();
        }
    }

    public function executeStatement($sql) {
        try {
            $this->_pdo->beginTransaction();
            $result   = $this->_pdo->exec($sql);
            $this->_pdo->commit();
            return $result;
        } catch(Exception $e) {
            $this->_pdo->rollBack();
            echo $e->getMessage();
        }
    }

}