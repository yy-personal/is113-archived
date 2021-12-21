<?php

/*
    Name:

    Email:
*/

require_once 'model/common.php';
require_once 'model/protect.php';

# == Part B : ENTER CODE HERE == 
// var_dump($_SESSION);
$role = $_SESSION['role'];
$empid = $_SESSION['empId'];
$dao = new EmployeeDAO();
$employee_info = $dao->getEmployee($empid);
// var_dump($employee_info);
if($dao->getSpouse($empid)){
    $spouse_info = $dao->getSpouse($empid);
    $spouse_name = $spouse_info->getSpouseName();
}
else{
    $spouse_info = 'None';
}
// var_dump($spouse_info);

if($dao->getChildren($empid)){
    $child_array = $dao->getChildren($empid);
}
else{
    $child_array = 'None';
}
// var_dump($child_array);
$employee_id = $employee_info->getEmpId();
// var_dump($employee_id);
$employee_name = $employee_info->getName();
// var_dump($employee_name);
$all_employees = $dao->getAllEmployees();
// var_dump($all_employees);
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

        if($role != 'Admin'){
            echo "
            <tr>
                <td>{$employee_id}</td>
                <td>{$employee_name}</td>
                <td>{$spouse_name}</td>
                <td>
            ";
                foreach($child_array as $child_name=>$child_age){
                    echo "$child_name : $child_age <br>" ;
                }
            echo"
            </td>
            </tr>
            </table>";//ending table here
            echo "You are logged out.";
            unset($_SESSION);
            session_destroy();
            return;
        }
        ?>

        <?php
        foreach($all_employees as $employee_info){
            $employee_id = $employee_info->getEmpId();
            // var_dump($employee_id);
            $employee_name = $employee_info->getName();
            // var_dump($employee_name);
            if($dao->getSpouse($employee_id)){
                $spouse_info = $dao->getSpouse($employee_id);
                $spouse_name = $spouse_info->getSpouseName();
            }
            else{
                $spouse_info = 'None';
            }
            if($dao->getChildren($employee_id)){
                $child_array = $dao->getChildren($employee_id);
            }
            else{
                $child_array = 'None';
            }
            // var_dump($child_array);
            $employee_password = $employee_info->getPassword();
            echo "
            <tr>
                <td>$employee_id</td>
                <td>$employee_name</td>
                <td>$spouse_name</td>
                <td>";
                if($child_array!='None'){
                    foreach($child_array as $child_name=>$child_age){
                        echo "$child_name : $child_age <br>" ;
                    }
                }
                else{
                    echo "$child_array";
                }
                echo"
                </td>
                <td><a href='updatePassword?empId=$employee_id'>$employee_password</a></td>
            </tr>
            ";
            
            
        }


        ?>
    
    

</body>
</html>
