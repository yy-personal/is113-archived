<?php

require_once 'Vehicle.php';

class Person {
    private $name;     // String
    private $age;      // Integer
    private $vehicles; // Indexed Array of Vehicle objects

    public function __construct($pName, $pAge) {
        $this->name = $pName;
        $this->age = $pAge;
        $this->vehicles = [];
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public function getVehicle() {
        return $this->vehicles;
    }

    public function addVehicle($pVehicle) {
        $this->vehicles[] = $pVehicle;
    }

    public function __toString() {
        $str = $this->name . " (" . $this->age . ") has " .
        count($this->vehicles) . " vehicles";

        return $str;
    }
}