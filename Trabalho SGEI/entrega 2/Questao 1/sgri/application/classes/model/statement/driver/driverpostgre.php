<?php
class PostgreDriver extends Driver
{
    public function __construct()
    {
        echo "Driver not implemented yet.";
        $this->setDb(DriverFactory::POSTGRESQL_DRIVER);
    }
}