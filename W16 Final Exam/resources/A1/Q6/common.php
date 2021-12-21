<?php

// DO NOT MODIFY THIS FILE

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

session_start();

function printErrors() {
	if(isset($_SESSION['errors'])){
    	
    	echo "<ul style='color:red;'>";
    	
    	foreach ($_SESSION['errors'] as $error) {
        	echo "<li>" . $error . "</li>";
    	}
    	
    	echo "</ul>";  
    	unset($_SESSION['errors']);
	}
}


?>