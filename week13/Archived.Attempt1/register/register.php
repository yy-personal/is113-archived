<?php

session_start();

// Have error?
if( isset($_SESSION['error']) ) {
    $error = $_SESSION['error'];
    unset($_SESSION['error']);
}

?>
<!DOCTYPE html>
<head>
    <title>Register</title>
</head>
<body>
    
    <h1>Register</h1>

    <form action="process_register.php" method="POST">

        Username: <input type='text' name='username'>
        <br>
        Password: <input type='password' name='pass'>
        <br>
        Confirm Password: <input type='password' name='confirm_pass'>
        <br><br>
        <input type='submit' value='Register'>

    </form>

    <?php

        if( isset($error) ) {
            echo "
            <h2>
                <font color='red'>
                    $error
                </font>
            </h2>
            ";
        }

    ?>

</body>
</html>