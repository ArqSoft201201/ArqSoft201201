<?php
class MySqlDriver extends Driver
{
    public function __construct()
    {
        echo "Driver not implemented yet.";
        $this->setDb(DriverFactory::MYSQL_DRIVER);
    }
}