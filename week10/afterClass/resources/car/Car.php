<?php

// Write Car class definition
class Car {

    private $year;
    private $make;
    private $model;
    private $rating;

    public function __construct($cyear, $cmake, $cmodel, $crating) {
        $this->year = $cyear;
        $this->make = $cmake;
        $this->model = $cmodel;
        $this->rating = $crating;
    }

    public function getCarYear() {
        return $this->year;
    }
    
    public function getCarMake() {
        return $this->make;
    }
    
    public function getCarModel() {
        return $this->model;
    }

    public function getCarrating() {
        return $this->rating;
    }
}



?>