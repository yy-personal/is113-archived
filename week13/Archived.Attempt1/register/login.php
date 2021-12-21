<?php

session_start();
if(isset($_SESSION['error'])){
    $error = $_SESSION['error'];
    unset($_SESSION['error']);

}

if(isset($_SESSION['success'])){
    $error = $_SESSION['success'];
    unset($_SESSION['success']);
}
?>
<!DOCTYPE html>
<head>
    <title>Login</title>
</head>
<body>
    
    <h1>Login</h1>

    <form action="process_login.php" method="POST">

        Username: <input type='text' name='username'>
        <br>
        Password: <input type='password' name='pass'>
        <br><br>
        <input type='submit' value='Login'>

    </form>

    <?php
        if(isset($error)){
            echo 
            "
            <h2>$error</h2>
            ";
        }

        if(isset($succes)){
            echo 
            "
            <h2>$success</h2>
            ";
        }
    ?>

</body>
</html>