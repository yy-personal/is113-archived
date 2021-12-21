<?php

/*
    Name:

    Email:
*/

require_once 'model/common.php';
require_once 'model/protect.php';
require_once 'model/EmployeeDAO.php';

# == Part D : ENTER CODE HERE == 
$dao = new EmployeeDAO();

if(!isset($_GET['empId']) && !isset($_GET['newPassword'])){
    header('Location: login-view.html');
}
var_dump($_GET);
if($dao->updatePassword($_GET['empId'],$_GET['newPassword'])){
    $dao->updatePassword($_GET['empId'],$_GET['newPassword']);
    echo "Password updated. You are logged out.";

}



session_unset(); //remove all session variables
session_destroy(); // remove the entire session
return;
?>