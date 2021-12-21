<?php

session_start();

    // WRITE YOUR CODES HERE

    if (isset ($_SESSION["username"])){
        echo "<h3> Thank you ". $_SESSION["username"] . " for visiting </h3>";
        unset($_SESSION["username"]);
        unset($_SESSION["errors"]);
        $_SESSION = [];

        echo "<a href=login.php> Home </a>";
    }
    else
    {
        header("Location: login.php");
        $_SESSION = [];
        return;
    }

?>