<?php

require_once 'model/common.php';

?>

<!DOCTYPE html>
<html>
	<body>
		<img src="images/sis.png">
		<h1>Statistics</h1>
        <?php
            # == Part C (Compute Statistics): ENTER CODE HERE == 
            $dao = new ResponseDAO();
            $responses = $dao->retrieveAll();
            $response_count = 0;
            $two_hours_count = 0;
            $fifteen_weeks_count = 0;

            foreach($responses as $response){
                $response_count++;
                if($response->getPreferredSemLength() == 15){
                    $fifteen_weeks_count++;
                }
                if($response->getPreferredClassLength() == 2){
                    $two_hours_count++;
                }
            }

            $fifteen_weeks_percentage = $fifteen_weeks_count / $response_count * 100.0;
            $fifteen_weeks_percentage = number_format($fifteen_weeks_percentage,2);

            echo "<table border='1'>";
            echo "  <tr>
                        <th># Responses</th>
                        <td>$response_count</td>
                    </tr>
                    <tr>
                        <th># 2 hours</th>
                        <td>$two_hours_count</td>
                    </tr>
                    <tr>
                        <th>% 15 weeks</th>
                        <td>{$fifteen_weeks_percentage}%</td>
                    </tr>";
            echo "</table>";         
            # ====
		?>
	</body>
</html>