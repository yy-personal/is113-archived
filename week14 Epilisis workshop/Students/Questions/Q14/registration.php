<?php
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$errors = [];
	if (strlen($username) >= 6 and !preg_match('/[^A-Za-z]/', $username) and strlen($password) >= 8){
		
		#Write your code here
		# Connect to database and insert username and password into user table
		
	} if (strlen($username) < 6){
		$errors[] = "Username must be at least 6 characters";
	} if (preg_match('/[^A-Za-z]/', $username)){
		$errors[] = "Your username can only contain lowercase or uppercase letters";
	} if (strlen($password) < 8){
		$errors[] = "Password must be at least 8 characters";
	}

	#Printing Error Message
	foreach ($errors as $error){
		echo "Error: " . $error . "</br>";
	}


?>