<?php

/*
    Name:

    Email:
*/

require_once 'model/common.php';
require_once 'model/protect.php';

# == Part D : ENTER CODE HERE == 
var_dump($_GET);
$dao = new EmployeeDAO();
$update_password = $dao->updatePassword($_GET['hidden_empId'],$_GET['newPassword']);
echo "Password updated, you are logged out.";
unset($_SESSION);
session_destroy();

?>