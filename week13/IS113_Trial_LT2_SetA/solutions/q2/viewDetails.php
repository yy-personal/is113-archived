<?php

require_once 'model/common.php';
require_once 'model/protect.php';

$role = $_SESSION['role']; 
$empId = $_SESSION['empId'];

$employeeDAO = new EmployeeDAO();

echo "<table border='1'>
        <tr>
            <th>Employee ID</th>
            <th>Name</th>
            <th>Spouse</th>
            <th>Child</th>";
            
if ($role == "Admin"){
    echo "<th>Password</th>";
}

echo "</tr>";
if ($role == "Admin"){
    $employees = $employeeDAO->getAllEmployees();
    foreach($employees as $employee){
        printEmployee($employee);
    }
} else {
    $employee = $employeeDAO->getEmployee($empId);
    printEmployee($employee);
    
}
    
echo "</tr>";
echo "</table>"; 

if ($role == "User"){
    echo "You are logged out";
    $_SESSION = [];
}

function printEmployee($employee){
    $role = $_SESSION['role']; 
    $empId = $employee->getEmpId();

    $employeeDAO = new EmployeeDAO();
    echo "<tr> 
            <td>{$employee->getEmpId()}</td>
            <td>{$employee->getName()}</td>
            <td>";
    $spouse = $employeeDAO->getSpouse($empId);
    
    if (isset($spouse)){
        echo "{$spouse->getSpouseName()}";
    } else {
        echo "None";
    }
    echo "</td>";
    
    $children = $employeeDAO->getChildren($employee->getEmpId());
    if (count($children) > 0){
        echo "<td>";
        foreach($children as $name=>$age){
            echo "$name : $age <br>";
        }
        echo "</td>";
    } else {
        echo "<td>None</td>";       
    }
    if ($role == "Admin"){
        echo "<td><a href='updatePassword.php?empId={$employee->getEmpId()}'>{$employee->getPassword()}</td>";
    }
}
?>
