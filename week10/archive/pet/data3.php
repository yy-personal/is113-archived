<?php

// I have no idea what a Pet (object) looks like!
// I'm just storing data.
// Who knows what a Pet (object) looks like? Which file has the Pet definition (template)?

// Task 4
// Can I reference that file?



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
$myPet = new Pet('Smelly', 'Cat', 'Male', 20); // This is 1 Pet object

// Next,
// Add the 3 new Pet objects into an Indexed Array $petsArrObjects
// This is an Indexed Array of Pet (class) objects
// "display3.php" will use this array later on - and display all pets' details in an HTML table
$petsArrObjects = [

];

?>