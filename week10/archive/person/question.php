<?php

require_once 'data3.php';
//Want all person object where gender =='F'
//$Person object has 10000 objects
//I have responsibility to go through and find mathinc person object
//Who have greater > 2 pets
// Indexed array of only matching person object

$dao = new PersonDAO();

$matches = $dao->getPersonsByGender('F');

$findppl = $dao->getPersonsByMinimumPets()

?>