<?php

namespace ToDoSrc\Framework;

// https://treewebsolutions.com/articles/the-singleton-pattern-in-php-65
class DbConnection
{
    private static $instance = null;
    private $conn;

    private $host = 'localhost:8889';
    private $user = 'root';
    private $password = 'root';
    private $name = 'todo_project';

    private function __construct()
    {
        $this->conn = new \PDO(
            "mysql:host=$this->host;dbname=$this->name",
            $this->user,
            $this->password,
            [\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION],
        );
    }

    public static function getInstance()
    {
        if (!self::$instance){
            self::$instance = new DbConnection();
        }

        return self::$instance;
    }

    public function getConnection()
    {
        return $this->conn;
    }

}