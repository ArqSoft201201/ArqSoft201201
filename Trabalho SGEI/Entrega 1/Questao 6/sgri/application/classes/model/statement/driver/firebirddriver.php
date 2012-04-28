<?php
class FirebirdDriver extends Driver
{
    public function __construct()
    {
        echo "Driver not implemented yet.";
        $this->setDb(DriverFactory::FIREBIRD_DRIVER);
    }
}