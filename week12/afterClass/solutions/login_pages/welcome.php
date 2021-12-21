<html>
    <body>
        <a href="login.php"> Home </a> |
        <a href="logout.php"> Logout </a>
        <br/>
    </body>
</html>

<?php
//require_once "common.php";

session_start();


if (isset ($_SESSION["username"])){
    echo "<h3> Welcome ". $_SESSION["username"] .  ". You have login successfully </h3>";
}
else
{
    header("Location: login.php");
    return;
}


?>
