<?php

$petsArr = [
    [
        'name'   => 'Okja',
        'type'   => 'Super Pig',
        'gender' => 'Female',
        'age'    => 3
    ],
    [
        'name'   => 'King Kong',
        'type'   => 'Gorilla',
        'gender' => 'Male',
        'age'    => 5
    ],
    [
        'name'   => 'Bailey',
        'type'   => 'Beluga Whale',
        'gender' => 'Male',
        'age'    => 7
    ]
];

?>
<!DOCTYPE html>
<html>
<head>
    <title>Display Pets (Version 1)</title>
</head>

<body>

    <h2>/is113/week10/pet/display1.php</h2>
    <hr>

    <table border='1'>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Gender</th>
            <th>Age</th>
        </tr>

    <?php
        // Task 1
        // Your Code Goes Here
        // Display each pet's details
        // REFER to $petsArr in display1.php (at the top)
        foreach ($petsArr as $pet){
            echo"
            <tr>
                <td>{$pet['name']}</td>
                <td>{$pet['type']}</td>
                <td>{$pet['gender']}</td>
                <td>{$pet['age']}</td>
            </tr>
            ";
        }
        
    ?>

    </table>

</body>

</html>