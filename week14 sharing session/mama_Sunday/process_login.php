<?php

session_start();
var_dump($_SESSION);
var_dump($_POST);

require_once 'include/AccountDAO.php';

// Assume that user keys in non-empty username/password

if( isset($_POST['username']) && array_key_exists('password', $_POST) ) {
    // 1) A good user will come to this page via form submission (from login.php)
    // Retrieve username/password
    // $_POST has keys username, password
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    echo "<h2>Username: $username, Password: $password</h2>";

    // Authenticate against database table 'account'
    // getPassword($username)
    $dao = new AccountDAO();
    $db_password = $dao->getPassword($username);
    var_dump($db_password);

    // if( $db_password == $password ) {
    // Compare plaintext password (form submission) TO encrypted pass from database table
    if( password_verify($password, $db_password) ) {
        echo "<h2>Authentication successful!</h2>";
        // Forward user to display.php
        // Let him know that this user is authenticated
        $_SESSION['username'] = $username;
        header('Location: display.php');
        return; // exit;
    }
    else {
        echo "<h2>Authentication failed!</h2>";
        // Forward user to login.php
        // Let him know that authentication failed
        $_SESSION['warning'] = "Authentication failed!";
        header('Location: login.php');
        return; // exit;
    }
}
else {
    // 2) Direct access to http://localhost/is113/sharing/mama/process_login.php
    //    is prohibited
    $_SESSION['warning'] = "Unauthorized access! Login first!";
    // associative array, create a new key-value pair in this assoc array
    // Forward user to login.php
    header('Location: login.php');
    return; // exit;
}

?>