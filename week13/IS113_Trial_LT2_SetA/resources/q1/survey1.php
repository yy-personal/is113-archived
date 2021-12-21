<?php

require_once 'model/common.php';

?>

<!DOCTYPE html>
<html>
	<body>
		
		<img src="images/sis.png">

		<h1>Survey: Page 1</h1>

		<p>
			We want to know your preferences about how courses are offered in SIS. <br/>
			Please provide your inputs.
		</p>

		<br>

		<form action="survey2.php" method="POST">
			Name: <input type="text" name="name"><br>
			<br/>
			<input name="page1" type="submit" value="Next Page">
		</form>
		
	</body>
</html>