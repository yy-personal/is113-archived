<?php

/*
    Name:

    Email:
*/

require_once 'model/common.php';

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
            $classL = $_POST['class_length'];
            $semesterL = $_POST['sem_length'];
            
            echo "
            You entered:
            <table border = 1>
                <tr>
                    <th>Name:</th>
                    <td>{$_SESSION['name']}</td>
                </tr>
                <tr>
                    <th>Class Length:</th>
                    <td>$classL</td>
                </tr>
                <tr>
                    <th>Semester Length:</th>
                    <td>$semesterL</td>
                </tr>
            </table>
            
            ";
            # ===
            
            # == Part B (Add a new response to the database and display status): ENTER CODE HERE ==

            $dao = new ResponseDAO();
            $outcome = $dao->addResponse($_SESSION['name'], $classL, $semesterL);

            if($outcome==true){
                echo "<strong>Response saved successfully</strong>";
            }
            else{
                echo "<strong>Response not saved successfully</strong>";
            }
            
            # ====
  
        ?>

</body>
</html>