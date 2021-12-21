<?php

session_start();
var_dump($_SESSION);

if( array_key_exists('warning', $_SESSION)) {
    $warning = $_SESSION['warning'];
    unset($_SESSION['warning']); // remove 1 session var
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
        Password: <input type='text' name='password'>
        <br><br>
        <input type='submit' value='Login'>
    </form>

    <?php
        if( isset($warning) ) {
            echo "
            <h2>
                <font color='red'>
                    $warning
                </font>
            </h2>
            ";
        }

    ?>

</body>
</html>