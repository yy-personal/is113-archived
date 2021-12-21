<?php

// DO NOT MODIFY THIS FILE

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

session_start();

?>