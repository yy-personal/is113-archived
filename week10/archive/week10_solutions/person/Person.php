<?php

require_once '../pet/Pet.php';

class Person {

    private $name;      // String
    private $gender;    // String
    private $pet;       // Pet object

    public function __construct($pName, $pGender, $pPet) {
        $this->name = $pName;
        $this->gender = $pGender;
        $this->pet = $pPet;
    }

    public function getName() {
        return $this->name;
    }

    public function getGender() {
        return $this->gender;
    }

    public function getPet() {
        return $this->pet;
    }

    public function greet() {
        return "Hello World!";
    }
}

?>