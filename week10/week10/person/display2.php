<?php

require_once 'data2.php';

?>
<!DOCTYPE html>
<html>
<head>
    <title>Display Persons & Pets (Version 2)</title>
</head>

<body>

    <h2>/is113/week10/person/display2.php</h2>
    <hr>

    <table border='1'>
        <tr>
            <th>Person Fullname</th>
            <th>Person Gender</th>
            <th>Pet Details</th>
        </tr>

    <?php
        // Task 4
        // Your Code Goes Here
        // Display each person's details
        // REFER to $personsArray in data2.php
        foreach($personsArray as $person) {
            echo "
            <tr>
                <td>{$person['name']}</td>
                <td>{$person['gender']}</td>";
            echo"
            <td>
                <ul>
                    <li>{$person['pet']->getName()}</li>
                    <li>{$person['pet']->getType()}</li>
                    <li>{$person['pet']->getGender()}</li>
                    <li>{$person['pet']->getAge()}</li>
                </ul>
            </td>";
            
            echo 
            "<tr>";
        }
    ?>

    </table>

</body>

</html>