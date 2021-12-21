<?php

require_once 'model/common.php';

?>

<!DOCTYPE html>
<html>
	<body>
		<img src="images/sis.png">
		<h1>Stored Responses</h1>
        <?php
            # == Part A (Display Stored Responses): ENTER CODE HERE == 
            $dao = new ResponseDAO();
            $responses = $dao->retrieveAll();
            echo "<table border='1'>";
            echo "  <tr>
                        <th>Name</th>
                        <th>Preferred Class Length<br>(in hours)</th>
                        <th>Preferred Sem Length<br>(in weeks)</th>";
            foreach($responses as $response){
                echo "<tr>
                        <td>{$response->getName()}</td>
                        <td>{$response->getPreferredClassLength()}</td>
                        <td>{$response->getPreferredSemLength()}</td>
                      </tr>";
            }
            echo "</table>";
            # ====
		?>
	</body>
</html>