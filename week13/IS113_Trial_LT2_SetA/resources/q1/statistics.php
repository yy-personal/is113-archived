<?php

/*
    Name:

    Email:
*/

require_once 'model/common.php';
$dao = new ResponseDAO();
$response_array = $dao->retrieveAll();
// var_dump($response_array);
?>

<!DOCTYPE html>
<html>
	<body>
		<img src="images/sis.png">
		<h1>Statistics</h1>
        <?php
            # == Part C (Compute Statistics): ENTER CODE HERE == 
        $number_of_responses = count($response_array);
        // var_dump($number_of_responses);
        $number_of_2_hours = 0;
        $number_of_15_weeks = 0;
        
        foreach($response_array as $response){
            var_dump($response);
            if($response->getPreferredClassLength() == 2){
                $number_of_2_hours++;
            }
            if($response->getPreferredSemLength() == 15){
                $number_of_15_weeks++;
            }
        $percentage_of_15_weeks = ($number_of_15_weeks/$number_of_responses) * 100;
        }
        ?>
        <table border="1">
            <tr>
                <th># Responses</th><td><?=$number_of_responses ?></td>
            </tr>
            <tr>
                <th># 2 hours</th><td><?=$number_of_2_hours ?></td>
            </tr>
            <tr>
                <th>% 15 weeks</th><td><?= number_format($percentage_of_15_weeks,2)  ?>%</td>
            </tr>
        </table>

        <?php
            # ====
		?>
	</body>
</html>