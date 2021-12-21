<?php

require_once '../pet/Pet.php';

class BusyPerson {

    private $name;      // String
    private $gender;    // String
    private $pets;       // Indexed Array of 1+ Pet objects

    public function __construct($pName, $pGender, $pPets) {
        $this->name = $pName;
        $this->gender = $pGender;
        $this->pets = $pPets;
    }

    public function getName() {
        return $this->name;
    }

    public function getGender() {
        return $this->gender;
    }

    public function getPets() {
        return $this->pets;
    }

    public function getNumPets() {
        return count($this->pets);
    }

    public function greet() {
        return "Hello World! I have " . $this->getNumPets() . " pets!";
    }
}

?>