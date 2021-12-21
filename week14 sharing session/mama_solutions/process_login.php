<?php

session_start(); // $_SESSION (superglobal)

var_dump($_POST);
var_dump($_SESSION);

require_once 'include/AccountDAO.php';

// User arrives at this PHP file ONLY via form submission
// Attempt authenticate username/password against db account table

// Presence of username/password in $_POST
// indicates ... form submission
if( isset($_POST['username']) && isset($_POST['password']) ) {
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    // echo "[IF] $username, $password";

    if( $username != ''  && $password != '' ) {
        // If both username/password are non-empty
        //    authenticate against account table (MySQL)
        echo "[IF] Both fields are non-empty<br>";

        // AccountDAO
        $dao = new AccountDAO(); // object
        $db_password = $dao->getPassword($username); // from db table account
        // encrypted password
        // var_dump($db_password);

        // User keyed in correct password for the given $username
        // 'selena123' == '$2y$10$nCVWx9eeRgyeZ4LorSzaQ.HwBobAzeq7xQJn9TM8lIYgG7iKtEMOi'
        // if( $password == $db_password ) {
        if( password_verify($password, $db_password) ) {
            echo "<br>Authentication successful";

            // Forward user to display.php
            // Let him know... that this is legit authenticated user ;-)
            $_SESSION['username'] = $username;
            $_SESSION['random'] = 'random message';
            header('Location: display.php');
            return;
        }
        else {
            echo "<br>Authentication failed";
            // Forward user to login.php
            // Let her know... authentication failed
            $warning = "Authentication failed";
            $_SESSION['warning'] = $warning;
            header('Location: login.php');
            return; // exit;
        }

    }
    else {
        // Else
        //    Forward user to login.php
        $warning = "Please fill in BOTH fields! Cannot be empty!";
        echo "[ELSE] Not all fields are non-empty<br>";
        // Register a new Session Variable
        $_SESSION['warning'] = $warning;
        header('Location: login.php');
        return; // exit;
    }
}
else {
    // http://localhost/is113/sharing/mama/process_login.php directly
    // NO NO... un-authorized access
    // Forward user to login.php
    // "Hello? Crazy? Un-authorized Access! Login first!"
    $warning = "Hello? Crazy? Un-authorized Access! Login first!";
    echo "[ELSE] $warning";
    $_SESSION['warning'] = $warning;
    header('Location: login.php');
    return; // exit;
}

?>