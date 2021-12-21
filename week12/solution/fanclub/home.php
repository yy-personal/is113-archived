<?php

require_once 'include/common.php';

if( !isset($_SESSION['username']) ) {
    header('Location: login.php');
    return;
}

$username = $_SESSION['username'];

?>
<html>
<head>
    <title>Home</title>
</head>
<body>

You are logged in as <b><?= $username ?></b> | <a href='logout.php'>Log Out</a>

<hr>


</body>
</html>