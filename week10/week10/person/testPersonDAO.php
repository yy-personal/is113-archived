<?php

// Let's test to see if we can create a PersonDAO object
// and retrieve data!

require_once "PersonDAO.php";

$dao = new PersonDAO();

// By now, $dao (PersonDAO object) should have a property called $persons initialized
// as an Indexed Array of 4 Person objects


// Test Case 1
// Let's retrieve all Person objects whose gender == 'F'
$girls = $dao->getPersonsByGender('F');
var_dump($girls);


// Test Case 2
// Let's retrieve all Person objects whose gender == 'M'
$boys = $dao->getPersonsByGender('M');
var_dump($boys);


// Test Case 2
// Let's retrieve all Person objects who have at least 3 pets
$persons_pets3 = $dao->getPersonsByMinimumPets(3);
var_dump($persons_pets3);


?>