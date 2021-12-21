<?php

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

            # == Part B (Get data passed through pages): ENTER CODE HERE ==
            $name = $_SESSION['name'];
            $class_length = $_POST['class_length'];
            $sem_length = $_POST['sem_length'];

            echo "You entered:<br/><br/>";
            echo "  <table border='1'>
                        <tr>
                            <th>Name:</td>
                            <td>$name</td>
                        </tr>
                        <tr>
                            <th>Class Length:</td>
                            <td>$class_length</td>
                        </tr>
                        <tr>
                            <th>Semester Length:</td>
                            <td>". $sem_length . "</td>
                        </tr>
                    </table>";
            # ====
            
            # == Part B (Add a new response to the database and display status): ENTER CODE HERE ==
            $dao = new ResponseDAO();
            $outcome = $dao->addResponse($name, $class_length, $sem_length);
            if($outcome){
                echo "<br/><strong>Response saved successfully</strong>";
            }
            else{
                echo "<br/><strong>Response was not saved successfully</strong>";
            }
            # ====
  
        ?>

</body>
</html>