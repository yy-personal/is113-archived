<?php

// require_once 'Person.php';
// require_once 'Vehicle.php';
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
}); // This only works for file inside the same folder, if the class is inside other folder.
//Here
spl_autoload_register(function ($class_name) {
    include "include/$class_name" . '.php';
});
//This 2 functions are most likely within the common.php, and just do a 
// require_once 'common.php'; // and that's it.

$person = new Person('Bobby', 20); //Step 1, refer to Person.php that it also created an empty indexed array.
$person->addVehicle( new Vehicle(2010, 111) );
$person->addVehicle( new Vehicle(2019, 222) );

echo $person; //Able to do echo on this indexed array, as there is a __toString in Person

?>