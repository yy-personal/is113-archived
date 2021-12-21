<?php
/*
    Name:

    Email:
*/

require_once 'model/common.php';
require_once 'model/protect.php';

# == Part C : ENTER CODE HERE == 
var_dump($_SESSION);
var_dump($_POST);
var_dump($_GET);
$employee_id = $_GET['empId'];
$dao = new EmployeeDAO();
$employeeInfo = $dao->getEmployee($employee_id);
?>
<!DOCTYPE html>
<html lang="en">
<body>
    <form action="process.php" method="GET">
    Employee ID: <?= $employeeInfo->getEmpId() ?><br>
    Name: <?= $employeeInfo->getName() ?><br>
    Current Password: <?= $employeeInfo->getPassword() ?><br>
    New Password: <input type="text" name = 'newPassword' value = '<?=generateRandomPassword()?>'><br>
    <input type='hidden' name='hidden_empId' value="<?=$_GET['empId']?>">
    <input type="submit" value = "Update">
    </form>
</body>
</html>


<?php



// $valid_char = '1234567890qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM';
// var_dump(strlen($valid_char));

function generateRandomPassword(){
# == Part C : ENTER CODE HERE == 
$valid_char = '1234567890qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM';
$lengthValidChar = strlen($valid_char);
$correct_pw = False;
while($correct_pw==false){
    $num = false;
    $bigLetter = false;
    $smallLetter = false;
    $generatedPW = '';
    for($i=0; $i<=7; $i++){
        $index = rand(0, $lengthValidChar-1);
        $current_char = $valid_char[$index];
        $generatedPW=$generatedPW.$current_char;
        if($index < 10){
            $num = True;
        }
        elseif($index < 35){
            $smallLetter = True;
        }
        elseif($index < 61){
            $bigLetter = True;
        }
    }
    if($num && $bigLetter && $smallLetter){
        $correct_pw=True;
    }
}
return $generatedPW;


}
?>