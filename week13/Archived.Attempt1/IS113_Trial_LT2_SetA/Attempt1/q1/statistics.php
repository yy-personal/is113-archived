<?php

/*
    Name:

    Email:
*/

require_once 'model/common.php';
// require_once 'model/Response.php';
$dao = new ResponseDAO();
$responses = $dao->retrieveAll();
var_dump($responses);

?>

<!DOCTYPE html>
<html>
	<body>
		<img src="images/sis.png">
		<h1>Statistics</h1>
        <table border="1">
        
        <?php
            # == Part C (Compute Statistics): ENTER CODE HERE == 
            $no_of_responses = count($responses);
            $count2hrs = 0;
            $preferred15weeks = 0;
            
            foreach($responses as $response){
                $preferredClassLength = $response ->getPreferredClassLength();
                $preferredSemLength = $response ->getPreferredSemLength();
                
                if ($preferredClassLength==2){
                    $count2hrs ++;
                }
                if ($preferredSemLength==15){
                    $preferred15weeks ++;
                }
                $percent15Weeks = ($preferred15weeks/$no_of_responses)*100;
                $percent15WeeksShow = number_format($percent15Weeks, 2);
            }
            echo "
            <tr>
                <th># Responses</th>
                    
                <td>$no_of_responses</td>
            </tr>
            <tr>
                <th># 2 hours</th>
                    
                <td>$count2hrs</td>
            </tr>
            <tr>
                <th>% 15 weeks</th>
                    
                <td>{$percent15WeeksShow} % </td>
            </tr>
            ";
            # ====
		?>
        </table>
	</body>
</html>