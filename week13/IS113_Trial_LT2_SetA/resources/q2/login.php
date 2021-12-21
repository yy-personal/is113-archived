<?php

/*
    Name:

    Email:
*/

require_once 'model/common.php';

 # == Part A : ENTER CODE HERE == 
$dao = new EmployeeDAO();

var_dump($_POST);
$login_id = $_POST['empId'];
$login_password = $_POST['password'];
$authentication = $dao->authenticate($login_id,$login_password);//Return the role of the eomplyee
if(!$authentication){
    if(!isset($_SESSION['countUnsuccessful'])){
        $_SESSION['countUnsuccessful'] = 1;
    }
    else{
        $_SESSION['countUnsuccessful']++;
    }
    echo "<h1>Number of unsuccessful consecutive logins : {$_SESSION['countUnsuccessful']} </h1>";
    echo "<a href='login-view.html'>Back to Login";
    return;
}
$_SESSION['empId']= $login_id;
$_SESSION['role']= $authentication;
unset($_SESSION['countUnsuccessful']);
header('Location: viewDetails.php');

?>


