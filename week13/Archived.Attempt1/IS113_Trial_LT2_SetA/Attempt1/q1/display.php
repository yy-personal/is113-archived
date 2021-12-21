<?php

/*
    Name:

    Email:
*/

require_once 'model/common.php';
require_once 'model/ResponseDAO.php';
$dao = new ResponseDAO();
$responses = $dao->retrieveAll();
var_dump($responses);
?>

<!DOCTYPE html>
<html>
	<body>
		<img src="images/sis.png">
		<h1>Stored Responses</h1>
		<table border='1'>
        <?php
            # == Part A (Display Stored Responses): ENTER CODE HERE == 
			echo"
			<tr>
				<th>
					Name
				</th>
				<th>
					Preferred Class Length(in hours)
				</th>
				<th>
					Preferred Sem Length(in weeks)
				</th>
			</tr>
			";
			foreach($responses as $response){
				echo
				"
				<tr>
					<td>
						{$response->getName()}
					</td>
					<td>
						{$response->getPreferredClassLength()}
					</td>
					<td>
						{$response->getPreferredSemLength()}
					</td>
				</tr>
				";
			}
            # ====
		?>
		</table>
	</body>
</html>