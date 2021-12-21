<?php

session_start(); // COMMON TRICK QN
var_dump($_POST);
require_once 'include/AccountDAO.php';


if( isset($_POST['username']) && isset($_POST['pass']) ) {

    $username = $_POST['username'];
    $pass = $_POST['pass'];

    //I dont know if both are empty?

    //

    if( $username != '' && $pass != '' ) {
        echo "Username: $username <br> Pass: $pass <hr>";

        //Authenticate this against mySQL account table
        //Refer to AccountDAO.php
        $dao = new AccountDAO;
        $db_password = $dao->getPassword($username);
        // var_dump($db_password);
        

        // if($pass == $db_password){
        //     $msg = 'Authentication successful.';
        //     echo $msg;
        // }
        if(password_verify($pass,$db_password)){
            $msg = 'Authentication successful.';
            echo $msg;
        }
        else{
            $msg = 'Authentication failed.';
            echo $msg;
        }

        
        
    }
    else {
        $error = 'Both fields must be non-empty!';
        $_SESSION['error'] = $error;
        header('Location: login.php');
        return;
    }

}
else {
    $error = 'Unauthorized access. Log in here!';
    $_SESSION['error'] = $error;
    header('Location: login.php');
    return;
}

?>