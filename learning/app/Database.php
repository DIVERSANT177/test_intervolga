<?php

namespace App;

const USER = "root";
const PASS = "root";

class Database{
    private static $instance = null;
    private $connection = null;

    public static function getInstance(): Database{
        if(!self::$instance){
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __construct(){
        $this->connection = new \PDO('mysql:host=localhost;dbname=test_db', USER, PASS);
    }

    public static function connection(): \PDO{
        return self::getInstance()->connection;
    }

    public static function prepare($statement): \PDOStatement{
        return self::connection()->prepare($statement);
    }

    private function __clone(){}
    private function __wakeup(){}
}