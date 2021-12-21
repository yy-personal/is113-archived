<?php

// Indexed Array of Associative Arrays
// Each inner Associative Array is one person
// Each "person" owns 1 pet

// Task 2
// Borrow the definition of "Pet" class from week10/pet/Pet.php
// How do you reference Pet.php?


// Task 3
// For each "person"
//    Re-write the VALUE of "pet" (key) such that:
//        The VALUE is a Pet object (instead of an indexed array)
//
// HINT: How do you create a new Pet object?

$personsArray = [
    [
        'name' => 'Bogum',
        'gender' => 'M',
        'pet' => ['Okja', 'Super Pig', 'Female', 3]
    ],
    [
        'name' => 'Sooji',
        'gender' => 'F',
        'pet' => ['King Kong', 'Gorilla', 'Male', 5]
    ],
    [
        'name' => 'Hyun Bin',
        'gender' => 'M',
        'pet' => ['Bailey', 'Beluga Whale', 'Male', 7]
    ] 
];

?>