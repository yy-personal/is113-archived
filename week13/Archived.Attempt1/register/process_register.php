<?php

session_start();

require_once 'include/AccountDAO.php';

if( isset($_POST['username']) && isset($_POST['pass']) && isset($_POST['confirm_pass'])) {

    $username = $_POST['username'];
    $pass = $_POST['pass'];
    $confirm_pass = $_POST['confirm_pass'];

    if( $username != '' && $pass != '' && $confirm_pass != '' ) {

        // Check if passwords match
        if( $pass != $confirm_pass ) {
            $error = 'Passwords do not match!';
            echo $error;
            $_SESSION['error'] = $error;
            header('Location: register.php');
            return;

            
        }
        else {
            echo "Username: $username <br> Pass: $pass <br> Confirm Pass: $confirm_pass <hr>";

            //This one is correct, so use AccountDAO to register this person.
            //Registration successful forward user to login.php
            
            //Register this msg to the session, so can show it at the login page.
            //Encrypt $pass into $hashed_pass(where the latter is encrypted.)
            $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);
            // var_dump($pass);
            // var_dump($hashed_pass);
            // exit;

            $dao = new AccountDAO;
            $status = $dao->register($username, $hashed_pass);
            if($status == True){
                $msg = "User $surname is succesfully registed. Try login!";
                $_SESSION['success'] = $msg;
                header('Location: login.php');
                return;

            }
            else{
                $error = "Registration Failed";
                $_SESSION['error'] = $error;
                header('Location: login.php');
                return;
            }
        }

    }
    else {
        $error = 'All fields must be non-empty!';
        $_SESSION['error'] = $error;
        header('Location: register.php');
        return;
    }

}
else {
    $error = 'Unauthorized access. Register here!';
    $_SESSION['error'] = $error;
    header('Location: register.php');
    return;
}

?>