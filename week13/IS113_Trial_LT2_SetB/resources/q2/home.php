<?php
/*
    Name:

    Email:
*/

require_once 'include/common.php';
var_dump($_SESSION);
if(!isset($_SESSION['uname'])){

    header('Location: login-view.html');
    $_SESSION['warning'] = 'Invasion detected! You did not login just now!!';
}
?>

<html>
    <body>
        <h1>highly sensitive data. Must be protected</h1>
    </body>
</html>
