<?php

// What does it mean by logging out?
// Once user logs out... he/she should not be able to access display.php
// Bc... duh? He/she logged out

session_start();

//unset($_SESSION['username']);

session_unset(); // clear all session variables

header('Location: login.php');
return; // exit;

?>