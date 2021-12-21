<?php

/*
    Name:

    Email:
*/

require_once 'model/common.php';
var_dump($_SESSION);
var_dump($_POST);
$dao = new ResponseDAO;
?>

<!DOCTYPE html>
<html>
    <body>

		<img src="images/sis.png">

		<h1>Survey: Summary</h1>

        <?php
            
            # Ensure that survey must always be taken from the beginning
            if (!isset($_POST['page2'])) {
                header("Location: survey1.php");
                exit;
            }
            #===

            # == Part B (Display student name and preferences): ENTER CODE HERE ==
            echo "
            You entered:<br>
            <table border = '1'>

                <tr>
                    <th>Name: </th>
                    <td> {$_SESSION['name']} </td>
                </tr>

                <tr>
                    <th>Class Length: </th>
                    <td> {$_POST['class_length']} </td>
                </tr>

                <tr>
                    <th>Semester Length: </th>
                    <td> {$_POST['sem_length']} </td>
                </tr>
            
            </table>
            
            ";
            # ===
            
            # == Part B (Add a new response to the database and display status): ENTER CODE HERE ==
            $status = $dao->addResponse($_SESSION['name'],$_POST['class_length'],$_POST['sem_length']);
            if($status==True){
                echo "<strong>Response saved successfully</strong>";
            }
            else{
                echo "<strong>Response was not saved successfully</strong>";
            }
            var_dump($status);
            # ====
  
        ?>

</body>
</html>