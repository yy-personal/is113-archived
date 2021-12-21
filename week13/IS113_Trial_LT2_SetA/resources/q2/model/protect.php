<?php

/*
    Name:

    Email:
*/

require_once 'common.php';
# == Part E : ENTER CODE HERE == 
if(!isset($_SESSION['role'])){
    header("Location: login-view.html"); 
    return;
}
?>