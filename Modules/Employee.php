<?php

class Employee extends Database
{

    private $name;
    private $email;
    private $phn_no;


    public function getEmployees()
    {
        $stmt = $this->connect()->prepare("SELECT * FROM Employees");
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $json = json_encode($results,JSON_PRETTY_PRINT);
        return $json;
    }

    public function postEmployees($param)
    {
        $this->name = $param['name'];
        $this->email = $param['email'];
        $this->phn_no = $param['phn_no'];
        $sql = "INSERT INTO employees (name, email, phn_no) VALUES ('$this->name', '$this->email', '$this->phn_no')";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        echo $this->getEmployees();
    }
}
