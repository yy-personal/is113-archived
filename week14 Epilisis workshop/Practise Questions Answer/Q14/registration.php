<?php
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$errors = [];
	if (strlen($username) >= 6 and !preg_match('/[^A-Za-z]/', $username) and strlen($password) >= 8){
		
		#Write your code now
		$dsn = "mysql:host=localhost;dbname=wadworkshop2021;port=3306";
		$pdo = new PDO($dsn, "root", ""); 
		$sql = 'INSERT INTO user(`username`,`password`) VALUES (:username, :password)'; 
		$stmt = $pdo->prepare($sql); 
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
		$stmt->bindParam(':username', $username, PDO::PARAM_STR);
		$stmt->bindParam(':password', $password, PDO::PARAM_STR);
		$isInserted = $stmt->execute();

		if($isInserted){
			echo "<h2>Thanks for registering $username</h2>";
		}

		$stmt->closeCursor();
		$pdo = null;

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