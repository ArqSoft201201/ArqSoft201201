<?php
include("oracledriver.php");
class DriverFactory
{
    const MYSQL_DRIVER         = 1;
    const ORACLE_DRIVER        = 2;
    const MS_SQL_SERVER_DRIVER = 3;
    const FIREBIRD_DRIVER      = 4;
    const POSTGRESQL_DRIVER    = 5;

    public static function factory($user, $password, $host, $dbName)
    {
        $dbType = Config::DB;
        $conn = null;
        switch ($dbType) {
            case self::MYSQL_DRIVER:
                $conn = new MySqlDriver($user, $password, $host, $dbName);
                break;
            case self::ORACLE_DRIVER:
                $conn = new OracleDriver($user, $password, $host, $dbName);
                break;
            case self::MS_SQL_SERVER_DRIVER:
                $conn = new MsSqlServerDriver($user, $password, $host, $dbName);
                break;
            case self::FIREBIRD_DRIVER:
                $conn = new FirebirdDriver($user, $password, $host, $dbName);
                break;
            case self::POSTGRESQL_DRIVER:
                $conn = new PostgreDriver($user, $password, $host, $dbName);
                break;
        }
        return $conn;
    }
}