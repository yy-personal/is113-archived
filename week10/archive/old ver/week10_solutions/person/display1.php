<?php

require_once 'data1.php';

?>
<!DOCTYPE html>
<html>
<head>
    <title>Display Persons & Pets (Version 1)</title>
</head>

<body>

    <h2>/is113/week10/person/display1.php</h2>
    <hr>

    <table border='1'>
        <tr>
            <th>Person Fullname</th>
            <th>Person Gender</th>
            <th>Pet Details</th>
        </tr>

    <?php
        // Task 1
        // Your Code Goes Here
        // Display each person's details
        // REFER to $personsArray in data1.php
        foreach($personsArray as $person) {
            echo "
            <tr>
                <td>{$person['name']}</td>
                <td>{$person['gender']}</td>";

            $pet = $person['pet'];
            echo "
                <td>
                    <ul>
                        <li>$pet[0]</li>
                        <li>$pet[1]</li>
                        <li>$pet[2]</li>
                        <li>$pet[3]</li>
                    </ul>
                </td>
            ";

            echo "
            </tr>
            ";
        }
    ?>

    </table>

</body>

</html>