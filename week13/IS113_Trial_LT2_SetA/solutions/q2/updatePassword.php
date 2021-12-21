<?php

require_once 'model/common.php';
require_once 'model/protect.php';

$empId = $_GET['empId'];
echo "EmployeeID : $empId <br>";
$employeeDAO = new EmployeeDAO();
$employee = $employeeDAO->getEmployee($empId);
echo "Name : {$employee->getName()} <br>";
echo "Current Password : {$employee->getPassword()} <br>";
echo "<form action='process.php'>
        New Password : 
            <input type='text' name='newPassword' value=";
            echo generateRandomPassword();
            echo ">
            <br>";
echo "<input type='hidden' name='empId' value='{$_GET['empId']}'/>";
echo "<input type='submit' value='Update'>";
echo "</form>";


function generateRandomPassword(){
    //code here
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
    $randomString = ''; 

    $result = false;
    
    while ($result === false){
        $num = false;
        $smallLetter = false;
        $bigLetter = false;
        $randomString = "";

        for ($i = 0; $i < 8; $i++) { 
            $index = rand(0, strlen($characters) - 1); 
            $randomString .= $characters[$index]; 
            if ($index < 10){
                $num = true;
            } else if ($index < 36){
                $smallLetter = true;
            } else {
                $bigLetter = true;
            }
        }
        $result = $num && $smallLetter && $bigLetter;
    }
    return $randomString;
}
?>