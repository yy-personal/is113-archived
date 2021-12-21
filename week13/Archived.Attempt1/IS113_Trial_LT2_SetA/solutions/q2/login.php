<?php

require_once 'model/common.php';

// Get empId and password from FORM submission
$empId = $_POST['empId'];
$password = $_POST['password'];

// Use EmployeeDAO to check whether $empId is found in employee table
$employeeDAO = new employeeDAO();
$role = $employeeDAO->authenticate($empId, $password);

if(isset($role)) {
    $_SESSION['empId'] = $empId;
    $_SESSION['role'] = $role; 
    unset($_SESSION['countUnsuccessful']); 
    header('Location: viewDetails.php');
} else {
   if (isset($_SESSION['countUnsuccessful'])){
    $_SESSION['countUnsuccessful'] += 1;
   } else {
    $_SESSION['countUnsuccessful'] = 1;
   }
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
