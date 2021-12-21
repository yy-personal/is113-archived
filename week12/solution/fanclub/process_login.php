<?php

require_once 'include/common.php';

if( trim($_POST['username']) != '' && trim($_POST['password']) != '' ) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Authenticate
    $dao = new AccountDAO();

    // Generate hashed password
    $hashed_password = $dao->getHashedPassword($username); // From DB account table

    if( $hashed_password != null ) {

        if( password_verify($password, $hashed_password) ) {
            $_SESSION['username'] = $username;
            header('Location: home.php');
            return;
        }
    }


    $msg = "Authentication failed";
    $_SESSION['error'] = $msg;
    header('Location: login.php');
    return;
}
else {
    // 1) Register Error message
    $msg = "Please provide both username and password";
    // Store Session Variable
    $_SESSION['error'] = $msg;

    // 2) Forward user to login.php
    header("Location: login.php");
    return;
}

?>