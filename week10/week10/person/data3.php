<?php

// Indexed Array of Person objects
require_once "Person.php";
require_once "../pet/Pet.php";

$personsArray = [
    new Person(
        'Bogum',
        'M',
        new Pet('Okja', 'Super Pig', 'Female', 3)
    ),
    new Person(
        'Sooji',
        'F',
        new Pet('King Kong', 'Gorilla', 'Male', 5)
    ),
    new Person(
        'Hyun Bin',
        'M',
        new Pet('Bailey', 'Beluga Whale', 'Male', 7)
    )
];
// var_dump($personsArray);
?>