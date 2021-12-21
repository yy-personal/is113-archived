<?php
session_start(); //Importatn
// YOUR CODE GOES HERE
var_dump($_POST);

// if both fields are not empty
if(!empty($_POST['username']) && !empty($_POST['password'])){
    echo "Both firleds are here.";
    $username = $_POST['username'];
    $password = $_POST['password'];
}

// else(one or more fields empty)
else {
    $error = "Pleasse provide both username abnd password";

    $_SESSION['error'] = $error;
    //forward the user back to login.php.
    header("Location: login.php");
    return; //or exit
}   
?>
