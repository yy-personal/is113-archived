<?php

// Task 5
// Person class does NOT know what Pet looks like...
// Person.php needs to reference Pet class definition
// Which file should Person.php reference?
require_once "../pet/Pet.php";


// Task 6
// Complete the Person class definition below
class Person {

    // Properties (attributes)
    //   name --> String
    //   gender --> String
    //   pet --> Pet object
    private $name;
    private $gender;
    private $pet;

    // To make a new Person object
    // We need this SPECIAL method...
    // HINT: It's used to "construct" a new Person object
    public function __construct($personName, $personGender, $personPet) {
        $this->name = $personName;
        $this->gender = $personGender;
        $this->pet = $personPet;
    }

    // Getter method for name
        public function getPersonName() {
            return $this->name;
        }

    // Getter method for gender
    public function getPersonGender() {
        return $this->gender;
    }

    // Getter method for pet
    public function getPersonPet() {
        return $this->pet;
    }

    // Every Person object should be able to greet and say "Hello World"
    public function greet() {
        return "Hello World";
    }

}

?>