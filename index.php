<?php
include_once("./Incluses/database.php");
include_once './Modules/Employee.php';

$emp = new Employee();
// $emp->postEmployees($_POST);


$service =  $_GET['type'];
switch ($service) {
    case 'get_emp_data':
        echo $emp->getEmployees();
        break;

}

//    $email = $_POST['email'];
//    $phn_no = $_POST['phn_no'];
