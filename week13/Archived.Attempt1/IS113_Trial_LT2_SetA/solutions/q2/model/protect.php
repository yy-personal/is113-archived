<?php
require_once 'common.php';

// Is the session variable role available
if ( !isset($_SESSION['role'])) {
    // No session variable "role" implies no login user_error
    
    // redirect to login page
    header("Location: login-view.html"); 
    exit();
}

?>