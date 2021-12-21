<?php

// display.php does NOT have data
// It focuses on DISPLAY-ing data.
// Data come from 'data3.php'
// Task 6
// How do we refer to $petsArrObjects (Indexed Array of Pet objects) from data3.php?
require_once "data3.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Display Pets (Version 3)</title>
</head>

<body>

    <h2>/is113/week10/pet/display3.php</h2>
    <hr>

    <table border='1'>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Gender</th>
            <th>Age</th>
            <th>Hungry Sound</th>
            <th>Snore Sound</th>
        </tr>

    <?php
        // Task 7
        // Your Code Goes Here
        // Display each Pet object's details in a row
        //
        // This time, each Pet must
        //   hungry()
        //   snore()
        // N number of times
        //   where N = a pet's age
        //
        // So if a pet is 3 years old
        //    it will make hungry sound 3 times and snore sound 3 times.
        foreach($petsArrObjects as $pet){
            $hungry_times = str_repeat("{$pet->hungry()} ",$pet->getAge());
            $snore_times = str_repeat("{$pet->snore()} ",$pet->getAge());
            echo"
            <tr>
                <td>{$pet->getName()}</td>
                <td>{$pet->getType()}</td>
                <td>{$pet->getGender()}</td>
                <td>{$pet->getAge()}</td>
                <td>{$hungry_times}</td>
                <td>{$snore_times}</td>
            </tr>
            ";
        }
    ?>

    </table>

</body>

</html>