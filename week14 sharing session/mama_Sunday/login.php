<?php

session_start();
var_dump($_SESSION);

// 2 cases under which user will end up in login.php
// 1) fresh new visit login.php for the first time
// 2) user went to process_login.php 
//     whoops got forwarded to login.php

if( isset($_SESSION['warning']) ) {
    $warning = $_SESSION['warning'];
    // remove this session variable
    unset($_SESSION['warning']);
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
        // isset($assoc_array['key']) // if key exists
        // isset($variable) // if this variable was created
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