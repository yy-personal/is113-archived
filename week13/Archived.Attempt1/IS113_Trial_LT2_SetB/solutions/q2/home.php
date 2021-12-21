<?php

require_once 'include/common.php';

if (!isset($_SESSION['token'])) {
    header('Location: login-view.html');
    return;
}

?>

<html>
    <body>
        <h1>highly sensitive data. Must be protected</h1>
    </body>
</html>