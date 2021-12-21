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
            var_dump($_SESSION);
            var_dump($_POST);
            $name_submitted = $_SESSION['name'];
            $class_length_submitted = $_POST['class_length'];
            $semester_length_submitted = $_POST['sem_length'];
            ?>
            <table border="1">
            
                <tr>
                    <th>Name:</th><td><?=$name_submitted ?></td>
                </tr>
                <tr>
                    <th>Class Length:</th><td><?=$class_length_submitted ?></td>
                </tr>
                <tr>
                    <th>Semester Length:</th><td><?=$semester_length_submitted ?></td>
                </tr>
            
            </table>

            <?php
            # ===
            
            # == Part B (Add a new response to the database and display status): ENTER CODE HERE ==
            $dao = new ResponseDAO();
            $add_submitted_response = $dao->addResponse($name_submitted,$class_length_submitted,$semester_length_submitted);

            if($add_submitted_response){
                echo "<strong>Response saved successfully</strong>";
            }
            else{
                echo "<strong>Response was not saved successfully</strong>";
            }
            # ====
            
        ?>

</body>
</html>