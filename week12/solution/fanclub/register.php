<?php

require_once 'include/common.php';

$msg = '';
if( isset($_SESSION['error']) ) {
    $msg = $_SESSION['error'];
    unset($_SESSION['error']);
}

?>
<html>
<head>
    <title>Register.php</title>
</head>
<body>

    <h1>Register a New Account</h1>

    <form action='process_register.php' method='POST'>

        Username: <input type='text' name='username'>
        <br>
        Password: <input type='password' name='password'>
        <br>
        Re-type password: <input type='password' name='retype_password'>

        <br>
        <br>
        <input type='submit' value='Register'>

    </form>

    <?php

        echo "
            <font color='red'>
                <h2>$msg</h2>
            </font>
        ";

    ?>

</body>
</html>