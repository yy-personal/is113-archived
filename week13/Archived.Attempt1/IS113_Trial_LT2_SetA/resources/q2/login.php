<?php

/*
    Name:

    Email:
*/

require_once 'model/common.php';
$dao = new EmployeeDAO;

# == Part A : ENTER CODE HERE == 
// var_dump($_POST);
if(isset($_POST['empId']) && isset($_POST['password'])){
    $empid = $_POST['empId'];
    $password = $_POST['password'];
}

if(!isset($_SESSION['countUnsuccessful'])){
    $_SESSION['countUnsuccessful'] = 0;
}

// var_dump($empid);
// var_dump($password);
if(isset($_POST['empId']) && isset($_POST['password']) && $dao->authenticate($empid, $password)){
    $role = $dao->authenticate($empid, $password);
    $_SESSION['empId'] = $empid;
    $_SESSION['password'] = $password;
    unset($_SESSION['countUnsuccessful']);
    header('Location: viewDetails.php');
}
else{
    $_SESSION['countUnsuccessful'] ++;
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
