<?php

/***
to auto-load class definitions from PHP files
***/
spl_autoload_register(function($class) {
    $path = "./model/" . $class . ".php";
    require_once $path; 
    
});



/***
session related stuff
***/
session_start();


/***
print errors based on session variable 'errors'
***/
function printErrors() {
    if(isset($_SESSION['errors'])){
        
        echo "<ul style='color:red;'>";
        
        foreach ($_SESSION['errors'] as $error) {
            echo "<li>" . $error . "</li>";
        }
        
        echo "</ul>";   
        unset($_SESSION['errors']);
    }
}

?>

<html>
    <body>
        <a href="login.php"> Home </a> |
        <a href="register.php"> Register </a> |
        <a href="change_password.php"> Change Password </a> |
        <a href="logout.php"> Logout </a>
        <br/>
    </body>
</html>