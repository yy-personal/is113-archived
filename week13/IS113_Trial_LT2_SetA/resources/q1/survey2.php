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

		<h1>Survey: Page 2</h1>

        <?php

            # Ensure that survey must always be taken from the beginning
            if (!isset($_POST['page1'])) {
                header("Location: survey1.php");
                exit;
            }
            # ====

            # == Part B (Get data passed through pages): ENTER CODE HERE == 
            $name_submitted = $_POST['name'];
            // var_dump($name_submitted);
            $_SESSION['name'] = $name_submitted;
            var_dump($_SESSION['name']);
            # ====
            
			echo "	<p>
						Hi, please provide your preferred class length and semester length: 
                    </p>";
                    
		?>

		<br/>

		<form action="process_survey.php" method="POST">
            Preferred class length:<br/>
            <input type="radio" name="class_length" value="2" id="2hours" checked/> <label for="2hours">2 hours</label>
            <input type="radio" name="class_length" value="3" id="3hours"/> <label for="3hours">3 hours</label> 
            <br/>
            <br/>
            
            Preferred semester length:<br/>
            <input type="radio" name="sem_length" value="15" id="15weeks" checked/> <label for="15weeks">15 weeks</label>
            <input type="radio" name="sem_length" value="16" id="16weeks"/> <label for="16weeks">16 weeks</label> 
            <br/>
            <br/>
        
			<input name="page2" type="submit" value="Submit Your Feedback">
		</form>

	</body>
</html>