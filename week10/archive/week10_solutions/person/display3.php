<?php

require_once 'data3.php';

?>
<!DOCTYPE html>
<html>
<head>
    <title>Display Persons & Pets (Version 3)</title>
</head>

<body>

    <h2>/is113/week10/person/display3.php</h2>
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
        /*
            [
                'name' => 'Bogum',
                'gender' => 'M',
                'pet' => new Pet('Okja', 'Super Pig', 'Female', 3)
            ]
        */
        foreach($personsArray as $personObject) {
            $petObject = $personObject->getPet(); // Pet object

            echo "
            <tr>
                <td> {$personObject->getName()} </td>
                <td> {$personObject->getGender()} </td>
                <td>
                    <ul>
                        <li> {$petObject->getName()} </li>
                        <li> {$petObject->getType()} </li>
                        <li> {$petObject->getGender()} </li>
                        <li> {$petObject->getAge()} </li>
                    </ul>
                </td>
            </tr>
            ";
        }
    ?>

    </table>

</body>

</html>