<?php

/*
    Name:

    Email:
*/

require_once 'model/common.php';
$dao = new ResponseDAO;
$responses = $dao->retrieveAll();
?>

<!DOCTYPE html>
<html>
	<body>
		<img src="images/sis.png">
		<h1>Statistics</h1>
        <?php
            # == Part C (Compute Statistics): ENTER CODE HERE == 
            $num_of_responses = count($responses);
            $two_hours = 0;
            $fifteenweeks = 0;
            foreach($responses as $response){
                if($response->getPreferredClassLength() == 2){
                    $two_hours++;
                }
                if($response->getPreferredSemLength() == 15){
                    $fifteenweeks++;
                }
            }
            $percentageFifteenWeek =  ($fifteenweeks/$num_of_responses)*100;
            $percentageFifteenWeek = round($percentageFifteenWeek,2);

            echo"
            <table border = '1'>
            
            <tr>
                <th> #Responses</th>
                <td> $num_of_responses</td>
            </tr>
            
            <tr>
                <th> # 2 hours</th>
                <td>$two_hours</td>
            </tr>

            <tr>
                <th> % 15 weeks</th>
                <td>$percentageFifteenWeek%</td>
            </tr>
            </table>
            ";
            # ====
		?>
	</body>
</html>