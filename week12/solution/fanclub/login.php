<?php
require_once 'include/common.php';

if( isset($_SESSION['error']) ) {
    $error = $_SESSION['error'];
    
    // once retrieve, remove it
    unset($_SESSION['error']);
}

if( isset($_SESSION['success']) ) {
    $success = $_SESSION['success'];
    
    // once retrieve, remove it
    unset($_SESSION['success']);
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
        if( isset($error) ) {
            echo "
                <font color='red'>
                    <h2>
                        $error
                    </h2>
                </font>
            ";
        }

        if( isset($success) ) {
            echo "
                <font color='blue'>
                    <h2>
                        $success
                    </h2>
                </font>
            ";
        }
    ?>

</body>
</html>