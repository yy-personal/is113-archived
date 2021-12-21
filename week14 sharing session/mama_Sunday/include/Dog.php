<?php

class Dog {

    private $name;   // String
    private $gender; // String
    private $age;    // Integer

    public function __construct($pName, $pGender, $pAge) {
        $this->name = $pName;
        $this->gender = $pGender;
        $this->age = $pAge;
    }

    public function getName() {

        return $this->name;
    }

    public function getGender() {

        return $this->gender;
    }

    public function getAge() {
        return $this->age;
    }
}

?>