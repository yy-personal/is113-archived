<?php

// YOUR CODE GOES HERE
session_start();
var_dump($_SESSION);
$error = '';
//1) Loading this page for the first time $_SESSION['error'] shouldnt appear, only second time
if(array_key_exists('error', $_SESSION)){
    $error = $_SESSION['error'];
    session_unset();
}
else{
}
?>
<html>
<head>
    <title>Login Page</title>
</head>
<body>

<h1>Login</h1>

    <form action='process_login.php' method='POST'>

        Username: <input type='text' name='username'>
        <br>
        Password: <input type='password' name='password'>
        <br><br>
        <input type='submit' value='Login'>
    </form>

    <?php
        // YOUR CODE GOES HERE
        if(isset($error)){
            echo "<h2>$error</h2>";
        }
        
    ?>

</body>
</html>