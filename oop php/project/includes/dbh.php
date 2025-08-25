<?php

class Dbh 
{
    private $host = "localhost";
    private $dbname = "oop";
    private $dbUsername = "root";
    private $dbPassword = "";

    protected function connect(){
        try {
            $pdo = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname , $this->dbUsername , $this->dbPassword);
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDo::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            die("connection failed-->" . $e->getMessage());
        }
    }
}