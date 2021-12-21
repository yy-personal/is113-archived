<?php

/*
    Name:

    Email:
*/

require_once 'model/common.php';
require_once 'model/Response.php';
$dao = new ResponseDAO();
$response_array = $dao->retrieveAll();
var_dump($response_array);
?>

<!DOCTYPE html>
<html>
	<body>
		<img src="images/sis.png">
		<h1>Stored Responses</h1>
		<table border='1'>
        <?php
            # == Part A (Display Stored Responses): ENTER CODE HERE == 
			echo "
			<tr>
			<th>Name</th><th>Preferred Class Length</th><th>Prefer Sem Length</th>
			</tr>
			";
			
			foreach($response_array as $response){
				echo"
				<tr>
					
					<td>{$response->getName()}</td>
					<td>{$response->getPreferredClassLength()}</td>
					<td>{$response->getPreferredSemLength()}</td>

				</tr>
				";
			}
            # ====
		?>
		</table>
	</body>
</html>