<?php
abstract class Driver
{
    private $_user;
    private $_password;
    private $_host;
    private $_dbName;
    private $_connection;
    private $_db;

    public function __construct($user = null, $password = null, $host = null, $dbName = null)
    {
        $this->setUser($user);
        $this->setPassword($password);
        $this->setHost($host);
        $this->setDbname($dbName);
    }

    public function setUser($user)
    {
        $this->_user = $user;
    }

    public function getUser()
    {
        return $this->_user;
    }

    public function setPassword($password)
    {
        $this->_password = $password;
    }

    public function getPassword()
    {
        return $this->_password;
    }

    public function setHost($host)
    {
        $this->_host = $host;
    }

    public function getHost()
    {
        return $this->_host;
    }

    public function setDbname($dbname)
    {
        $this->_dbname = $dbname;
    }

    public function getDbname()
    {
        return $this->_dbname;
    }

    public function setConnection(PDO $conn)
    {
        $this->_connection = $conn;
    }

    public function getConnection()
    {
        return $this->_connection;
    }

    protected function setDb($db)
    {
        $this->_db = $db;
    }

    protected function getDb()
    {
        return $this->_db;
    }
}