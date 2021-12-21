<?php

// Let's test to see if we can create Person objects

require_once 'Person.php';

// Task 7

/*
Create a Person object $bogum
   with the following details

        'name' => 'Bogum',
        'gender' => 'M',
        'pet' => ['Okja', 'Super Pig', 'Female', 3]

*/
$bogum = new Person ("Bogum", "M", new Pet ('Okja', 'Super Pig', 'Female', 3));
// var_dump($bogum)
// var_dump($bogum) and verify


?>