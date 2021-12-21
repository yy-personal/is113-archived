<?php

session_start();

session_unset(); // remove all session variables
session_destroy(); // removes the entire session (does not remove session variables)

// Forward user to login.php

header('Location: login.php');
return; // exit;, gooood practice

// There's nothing here...
?>