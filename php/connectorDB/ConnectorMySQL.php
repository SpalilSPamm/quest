<?php

class ConnectorMySQL
{

    const DSN = "mysql:host=localhost;dbname=bwt_conference";
    const USER = "root";
    const PASS = "1234";

    private static $instance;

    private function __construct()
    {
    }

    public static function getInstance(): ConnectorMySQL
    {
        if (is_null(self::$instance)) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    public function getConnection(): PDO
    {
        return new PDO(self::DSN, self::USER, self::PASS);

    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }
}

?>