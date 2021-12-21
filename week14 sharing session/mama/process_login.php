<?php
require_once 'include/AccountDAO.php';
session_start();
var_dump($_SESSION);
var_dump($_POST);
//User arrives at this PHP file ONLY via form submission
//Attempt authenticate username/password against db account table
if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // echo "[IF] $username, $password";
    if($username!='' && $password!=''){
        echo "Both fields are non-empty";
        $dao = new AccountDAO();
        $db_password = $dao->getPassword($username);
        // var_dump($db_password);
        if($password==$db_password){
            echo 'Authentication successful';
            header("location: display.php");
            $_SESSION['username'] = $username;
            return;
        }else{
            $warning = 'Authentication failed';
            $_SESSION['warning'] = $warning;
            echo "Not all fields are non-empty";
            header('Location: login.php');
            
        }
    }
    else{
        //Code below allow warning to be shown at the page to be redirected to.
        $warning = "Please fill in BOTH fields, cannot be empty.";
        $_SESSION['warning'] = $warning;
        echo "Not all fields are non-empty";
        header('Location: login.php');
    }

    
}
else{
    
    $warning = "Login first.";
    $_SESSION['warning'] = $warning;
    // echo "[ELSE] $warning";
    header('Location: login.php');
}
//Presence of username/password in $_POST is an indication of form submission, not a directly access into the webpage, is 'empty'


?>