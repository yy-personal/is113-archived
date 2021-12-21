<?php

/*
    Name:

    Email:
*/

require_once 'model/common.php';
require_once 'model/protect.php';
require_once 'model/Spouse.php';
require_once 'model/Employee.php';


# == Part B : ENTER CODE HERE ==
// var_dump($_POST);
// var_dump($_SESSION);
if(!isset($_SESSION['empId']) && !isset($_SESSION['password'])){
    header('Location: login-view.html');
}
$empId = $_SESSION['empId'];
// var_dump($empId);
$password = $_SESSION['password'];
// var_dump($password);
$dao = new EmployeeDAO();

$role = $dao->authenticate($empId, $password);
// var_dump($role);

if($role == 'Admin'){
    $all_employees = $dao->getAllEmployees();
    // var_dump($all_employees);
}




$employee_info = $dao->getEmployee($empId);
// var_dump($employee_info);
$employee_name = $employee_info->getName();

if($dao->getSpouse($empId) && $role == 'User'){
    $spouse = $dao->getSpouse($empId);
    // var_dump($spouse);
    // var_dump($spouse->getSpouseName());
    $spouseName = $spouse->getSpouseName();
}
else{
    $spouse = 'None';
}

if($dao->getChildren($empId)){
    $children_array = $dao->getChildren($empId);
    // var_dump($children_array);
}
else{
    $children_array = 'None';
}

?>

<!DOCTYPE html>
<html lang="en">
<body>
    <table border="1">

    <tr>
        <th>Employee ID</th>
        <th>Name</th>
        <th>Spouse</th>
        <th>Child</th>
        <?php
            if($role == 'Admin'){
                echo "<th>Password</th>";
            }
        ?>
    </tr>
    
        <?php
        if($role == 'Admin'){
            foreach($all_employees as $employee){
                var_dump($employee);
                $id = $employee->getEmpId();
                $name = $employee->getName();
                $password = $employee->getPassword();
                if($dao->getSpouse($id)){
                    $spouse = $dao->getSpouse($id);
                    // var_dump($spouse);
                    // var_dump($spouse->getSpouseName());
                    $spouseName = $spouse->getSpouseName();
                }
                else{
                    $spouseName = 'None';
                }
                if($dao->getChildren($id)){
                    $children_array = $dao->getChildren($id);
                    // var_dump($children_array);
                }
                else{
                    $children_array = 'None';
                }
                echo"
                <tr>
                <td>$id</td>
                <td>$name</td>
                <td>$spouseName</td>
                <td>";
                if($children_array != 'None'){
                    foreach($children_array as $children=>$age){
                        echo "$children : $age <br>";
                    }
                }
                else{
                    echo "None";
                }
                
                echo 
                "
                </td>
                <td><a href='updatePassword?empId=$id'>$id</a></td>
                ";
                
                }
            }
        else{
            echo"
            <tr>
            <td>$empId</td>
            <td>$employee_name</td>
            <td>$spouseName</td>
            <td>";
                foreach($children_array as $children=>$age){
                    echo "$children : $age <br>";
                }
            echo "
            </td>
            </tr>
            ";
        }
        
        ?>
    

    </table>
</body>
</html>


<?php


if($role == 'User'){
    echo "You are logged out.";
    unset($_SESSION);
    session_destroy();
    return;
}


?>
