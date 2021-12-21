<?php
session_start();
$errors = [];
$age = '';
$gender = '';
$candidates = '';

if(isset($_GET['age'])){
    $age = $_GET['age'];
    $_SESSION['age'] = $age;
    if(!is_numeric($age) || ($age<18) || $age>99){
        $errors[] = 'Age must be numeric and between 18 and 99.';
    }
}
if(isset($_GET['gender'])){
    $gender = $_GET['gender'];
    $_SESSION['gender'] = $gender;

}
else{
    $errors[] = 'Please select a gender';
}
if(isset($_GET['candidates'])){
    $candidates = $_GET['candidates'];
    $_SESSION['candidates'] = $candidates;
    if(count($candidates)>2){
        $errors[] = 'Please only select maximum of 2 candidates!';
    }
}
if(count($errors)>0){
    $_SESSION['errors']=$errors;
    header('Location: vote.php');
    return;
}

?>
