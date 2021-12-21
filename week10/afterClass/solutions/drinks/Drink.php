<?php

/*

Implement the Drink class.
1. It has 3 attributess: $name, $image, $price
2. Implement a constructor that takes in values for the 3 properties.

*/

class Drink {
    private $name;
    private $image;
    private $price;

    // Constructor
    public function __construct($n, $i, $p) {
        $this->name = $n;
        $this->image = $i;
        $this->price = $p;
    }

    //============ Getters & Setters ============
    public function getName() {
        return $this->name;
    }

    public function setName($n) {
        $this->name = $n;
    }

    public function getImage() {
        return $this->image;
    }

    public function setImage($i) {
        $this->image = $i;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($p) {
        $this->price = $p;
    }
    //===========================================
}

?>