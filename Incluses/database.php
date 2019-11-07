<?php

class Database {

    private $sarverName;
    private $userName;
    private $password;
    private $dbName;
    private $charset;

    public function connect () {
        $this->sarverName = "localhost";
        $this->userName = "root";
        $this->password = "";
        $this->dbName = "My_Database";
        $this->charset = "utf8mb4";

        try {
            $dsn = "mysql:host=".$this->sarverName.";dbname=".$this->dbName.";charset=".$this->charset;
            $pdo = new PDO($dsn, $this->userName, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            echo "Connection Failed ". $e->getMessage();
        }

        // $dsn = "mysql : host =".$this->sarverName . "dbname =". $this->dbName;
        // $pdo = new PDO($dsn, $this->userName, $this->password);
        // return $pdo;
    }
}

?>