<?php

require_once 'include/common.php';

if( trim($_POST['username']) != '' && trim($_POST['password']) && trim($_POST['retype_password']) ) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $retype_password = $_POST['retype_password'];

    // If passwords do not match:
    if( $password != $retype_password ) {
        // 1) Register Error message
        $msg = "Passwords do not match";
        $_SESSION['error'] = $msg;

        // 2) Redirect user to register.php
        header('Location: register.php');
        exit;
    }

    // Register
    $dao = new AccountDAO();
    
    // Generate hashed password from $password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $result = $dao->register($username, $hashed_password);

    if( $result ) {
        // 1) Register Success message
        $msg = "User $username has been successfully registered!";
        $_SESSION['success'] = $msg;

        // 2) Redirect user to login.php
        header('Location: login.php');
        exit;
    }
    else {
        // 1) Register Error message
        $msg = "User $username could not be registered!";
        $_SESSION['error'] = $msg;

        // 2) Redirect user to login.php
        header('Location: register.php');
        exit;
    }
}
else {
    // 1) Register Error message
    $msg = "All 3 fields must be filled out";
    // Store Session Variable
    $_SESSION['error'] = $msg;

    // 2) Redirect user to register.php
    header("Location: register.php");
    exit;
}

?>