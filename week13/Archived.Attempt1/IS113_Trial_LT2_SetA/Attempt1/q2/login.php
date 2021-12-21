<?php

/*
    Name:

    Email:
*/
session_start();
require_once 'model/common.php';
$dao = new EmployeeDAO;
 # == Part A : ENTER CODE HERE == 
var_dump($_POST);
if(isset($_POST['empID']) && isset($_POST['password'])){
    $empid = $_POST['empID'];
    $password = $_POST['password'];
}






 
?>

<html>
    <body>
<?php
    
    echo "<h1>Number of unsuccessful consecutive logins : {$_SESSION['countUnsuccessful']} </h1>";
    echo "<a href='login-view.html'>Back to Login";
?>
    </body>
</html>
