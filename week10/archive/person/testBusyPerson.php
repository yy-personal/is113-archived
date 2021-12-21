<?php

// Let's test to see if we can create BusyPerson objects

require_once 'Person.php';

// Task 10

/*
Create a Person object $bogum
   with the following details

        'name' => 'Bogum',
        'gender' => 'M',
        'pets' => [
            ['Okja', 'Super Pig', 'Female', 3],
            ['Bong', 'Rat', 'Male', 1]
        ]

*/
$bogum = new Person(
    "Bogum",
    "M",
    [
        new Pet('Okja','Super Pig', 'Female', 3),
        new Pet('Bong', 'Rat', 'Male', 1)
    ]
    
);

var_dump($bogum) 
// var_dump($bogum) and verify


?>