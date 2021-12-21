<?php

require_once 'include/AccountDAO.php';

session_start();


if( isset($_POST['username']) 
    && isset($_POST['password']) 
    && $_POST['username'] != ''
    && $_POST['password'] != '')
{

    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Authenticate
    $dao = new AccountDAO();
    $isValid = $dao->authenticate($username, $password);

    if( $isValid ) {
        $_SESSION['username'] = $username;
        header('Location: home.php');
        return;
    }
    else {
        $msg = "Authentication Failed";
        $_SESSION['error'] = $msg;
        header('Location: login.php');
        return;
    }
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