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
    private $name; //string
    private $gender; //string
    private $pet; //Pet (class) object//index in secont phase



    // To make a new Person object
    // We need this SPECIAL method...
    // HINT: It's used to "construct" a new Person object
    public function __construct($Mname, $Mgender, $MPet) {
        $this->name = $Mname;
        $this->gender = $Mgender;
        $this->pet = $MPet;
    }

    // Getter method for name
    public function getName(){
        return $this -> name;
    }

    // Getter method for gender
    public function getGender(){
        return $this -> gender;
    }

    // Getter method for pet
    public function getPet(){
        return $this -> pet; //null/pet object
    }

    // Every Person object should be able to greet and say "Hello World"
    public function greet(){
        return "Hello World. I am ". $this->getName(); // When within the class can retrieve private
    }

}

?>