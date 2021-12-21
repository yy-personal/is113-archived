<?php
    require_once "Person.php";
    session_start();  
?>
<!DOCTYPE html>
<html>
    <body>
        <form method="post" action="process.php">
            Name: <input type="text" name="name"/> <br/>
            Age: <input type="text" name="age"/> <br/>
            <input type="submit" value="Next" name="next"/><br/>
            <input type="submit" value="Find Oldest and Reset" name="find_oldest"/>
        </form>
        <?php
            # Check if the session contains any person details
            if(isset($_SESSION["person_arr"])) { 
                echo "<strong>Persons entered so far</strong>";
                echo "<br/>";
                echo "<table border='1'>";
                echo "<th>Name</th><th>Age</th>";
                # Retrieve an indexed array of Person objects from the session
                foreach($_SESSION["person_arr"] as $person){
                    # Display details of each Person object
                    echo "  <tr>
                                <td>{$person->getName()}</td>
                                <td>{$person->getAge()}</td>
                            </tr>";
                }
                echo "</table>";
            }
        ?>   
    <body>
</html>