<?php

class Cat {
    private $name;
    private $age;
    private $gender;
    private $status;

    public function __construct($name, $age, $gender, $status) {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
        $this->status = $status;
    }

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