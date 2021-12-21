<?php
    #Write your code here
    $username = $_POST['username'];
    $password = $_POST['password'];
    // $valid_char = 'qwertyuiopasdfghjklzxcvbnmQWERTYUIOPLKAJSHFGZXCVBNM';

    if(!ctype_alpha($username) or strlen($username)<6 or strlen($password)<8){
        echo "Fail<br>";
        echo "Username:{$username}<br>";
        echo "Password:{$password}<br>";
        return;
    }
    echo "Thanks for registering $username";


    
  
    


    
    
?>