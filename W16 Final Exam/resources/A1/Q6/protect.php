<?php

// DO NOT MODIFY THIS FILE

require_once "common.php";

if ( !isset($_SESSION['login']) ) {
    header('Location: index.php');
    exit();
}

?>