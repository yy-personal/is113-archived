<?php

// I have no idea what a Pet (object) looks like!
// I'm just storing data.
// Who knows what a Pet (object) looks like? Which file has the Pet definition (template)?

// Task 4
// Can I reference that file?
require_once "Pet.php";


/*
Indexed Array of 3 Associative Arrays
Each inner Associative Array is one pet
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
*/

// We will NOT be using the above $petsArr anymore!
// Since all pets have the same properties/attributes -
// We created a Pet class (a template) --> see in Pet.php



// Task 5
// Convert $petsArr (above) to 3 Pet objects: $pet1, $pet2, $pet3
// Example - creating a new Pet object
$pet1 = new Pet('Okja', 'Super Pig', 'Female', 3); // This is 1 Pet object
$pet2 = new Pet('King Kong', 'Gorilla', 'Male', 5);
$pet3 = new Pet('Bailey', 'Beluga Whale', 'Male', 7);
// Next,
// Add the 3 new Pet objects into an Indexed Array $petsArrObjects
// This is an Indexed Array of Pet (class) objects
// "display3.php" will use this array later on - and display all pets' details in an HTML table
$petsArrObjects = [
    $pet1,
    $pet2,
    $pet3
];
// var_dump($petsArrObjects);
?>