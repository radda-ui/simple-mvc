<?php 
namespace mvc\core;

class Database {
    
    public PDO $db;

    function __construct($config){
        $this->db = new \PDO($config["dsn"],$config["user"],$config["pass"]);
        return;
    }
}