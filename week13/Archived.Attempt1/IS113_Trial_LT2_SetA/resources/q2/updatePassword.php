<?php
/*
    Name:

    Email:
*/

require_once 'model/common.php';
require_once 'model/protect.php';
require_once 'model/Spouse.php';
require_once 'model/Employee.php';

# == Part C : ENTER CODE HERE == 
// if(isset($_GET['newPassword'])){
//     $new_password = $_GET['newPassword'];
// }
if(!isset($_GET['empId'])){
    header('Location: login-view.html');
}
$empId = $_GET['empId'];
$dao = new EmployeeDAO();
$all_employees = $dao->getAllEmployees();
$employee_info = $dao->getEmployee($empId);
$employee_name = $employee_info->getName();
$employee_password = $employee_info->getPassword();
var_dump($_GET);
?>

<!DOCTYPE html>
<html lang="en">
<body>
    <form action="process.php" method="GET">
    
    EmployeeID : <?= $empId ?> <br>
    Name : <?= $employee_name ?><br>
    Current Password: <?= $employee_password ?><br>
    New Password : <input type='text' name='newPassword' value = '<?= generateRandomPassword() ?>'> 
    
    <br><input type='submit' value='Update'>
    <input type="hidden" name='empId' value = <?= $_GET['empId'] ?>>
    </form>
    

</body>
</html>

<?php







function generateRandomPassword(){
# == Part C : ENTER CODE HERE == 
$characters = '1234567890qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM';
$random_password = '';
$result = false;
while($result == False){
    $num = False;
    $smallletter= False;
    $bigLetter=False;
    $random_password ='';

    for($i=0; $i<8; $i++){
        $index = rand(0, strlen($characters)-1); 
        $random_password = $random_password.$characters[$index];
        if($index<10){//$characters from 1 to 0
            $num = True;
        }
        elseif($index>9 && $index <36){
            $smallletter = True;
        }
        else{
            $bigLetter = True;
        }
        
        if($num==True && $smallletter==True && $bigLetter==True){
            $result = True;
        }
    }
}
return $random_password;
}
?>