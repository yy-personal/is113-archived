<?php
/*
    Name:

    Email:
*/
require_once 'include/common.php';
if(!isset($_SESSION['login_username']) or !isset($_SESSION['login_password'])){
    header('Location: login-view.html');
    return;
}


?>

<html>
    <body>
        <h1>highly sensitive data. Must be protected</h1>
    </body>
</html>

<?php

    // session_unset();
    // session_destroy();
?>
