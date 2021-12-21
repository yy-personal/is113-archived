<?php
    //As long as $_SESSION['username'] exist
    //User is still logged in.
    session_start();
    session_unset(); //remove all session variables
    session_destroy(); // remove the entire session

    header("Location: login.php");
    return;
?>