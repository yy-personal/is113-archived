<?php

require_once 'include/common.php';

// Unsetting or removing the current session
session_unset();

// Destroying the current session
session_destroy();


// Forward user to login.php
header('Location: login.php');
return;

?>