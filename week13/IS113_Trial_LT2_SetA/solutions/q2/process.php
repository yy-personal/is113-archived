<?php

require_once 'model/common.php';
#require_once 'model/protect.php';

$empId = $_GET['empId'];
$newPassword = $_GET['newPassword'];
$employeeDAO = new EmployeeDAO();
if ($employeeDAO->updatePassword($empId, $newPassword)){
    echo "Password updated. You are logged out";
    $_SESSION = [];
} 

?>