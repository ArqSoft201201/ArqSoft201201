<?php
class MsSqlDriver extends Driver
{
    public function __construct()
    {
        echo "Driver not implemented yet.";
        $this->setDb(DriverFactory::MS_SQL_SERVER_DRIVER);
    }
}