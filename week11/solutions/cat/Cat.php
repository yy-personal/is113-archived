<?php

class Cat {
    private $name;
    private $age;
    private $gender;
    private $status;

    public function __construct($pName, $pAge, 
            $gender, $status) {
        // HERE creates a
        $this->name = $pName;
        $this->age = $pAge;
        $this->gender = $gender;
        $this->status = $status;
    }

    // Getter method
    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public function getGender() {
        return $this->gender;
    }

    public function getStatus() {
        return $this->status;
    }
}

?>