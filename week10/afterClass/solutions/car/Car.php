<?php

class Car {

    private $year;
    private $make;
    private $model;
    private $rating;
    
    public function __construct($pYear, $pMake, $pModel, $pRating) {
        $this->year = $pYear;
        $this->make = $pMake;
        $this->model = $pModel;
        $this->rating = $pRating;
    }

    public function getYear() {
        return $this->year;
    }

    public function getMake() {
        return $this->make;
    }

    public function getModel() {
        return $this->model;
    }

    public function getRating() {
        return $this->rating;
    }
}

?>