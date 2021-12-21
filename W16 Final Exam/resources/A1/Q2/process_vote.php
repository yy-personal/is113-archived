<?php
session_start();
$errors = [];

if(isset($_GET['age'])){
    $age = $_GET['age'];
    $_SESSION['age'] = $age;
    if(!is_numeric($_GET['age'])){
        $errors[]='Age must be an integer!';
    }
    elseif($_GET['age']<18 or $_GET['age'] >99){
        $errors[]='Age must between 18 and 99!';
    }
}
if(!isset($_GET['gender'])){
    $errors[]='Please input gender!';
}
else{
    $gender = $_GET['gender'];
    $_SESSION['gender'] = $gender;
}
if(isset($_GET['candidates'])){
    $candidates = $_GET['candidates'];
    $_SESSION['candidates'] = $candidates;
    if(count($_GET['candidates'])>2){
        $errors[]='Max 2 candidates only!';
    }
}

if(count($errors)>0){
    $_SESSION['errors'] = $errors;
    header('Location: vote.php');
    return;
}



?>
