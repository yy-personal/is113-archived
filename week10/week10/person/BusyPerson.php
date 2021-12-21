<?php

// Task 8
// BusyPerson class does NOT know what Pet looks like...
// BusyPerson.php needs to reference Pet class definition
// Which file should BusyPerson.php reference?
require_once "../pet/Pet.php";

// Task 9
// Complete the BusyPerson class definition below

class BusyPerson {

    // Properties (attributes)
    //   name --> String
    //   gender --> String
    //   pets --> Indexed Array (of one or more Pet objects)
    private $name;
    private $gender;
    private $pets;

    // To make a new BusyPerson object
    // We need this SPECIAL method...
    // HINT: It's used to "construct" a new BusyPerson object
    public function __construct($bName, $bGender, $bPets){
        $this->name = $bName;
        $this->gender = $bGender;
        $this->pets = $bPets;
    }

    // Getter method for name
    public function getName() {
        return $this->name;
    }

    // Getter method for gender
    public function getGender() {
        return $this->gender;
    }

    // Getter method for pets
    public function getPets() {
        return $this->pets;
    }

    // Every BusyPerson object should be able to greet and say "Hello World! I have X pets"
    // where X is the number of pets (if any) the current BusyPerson object owns
    public function greet() {
        $num_pets = count($this->pets);
        return "Hello World! I have {$num_pets} pets";
    }
}

?>