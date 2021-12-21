<?php

/*
Implement the Drink class.
1. It has 3 attributess: $name, $image, $price
2. Implement a constructor that takes in values for the 3 attributes.
3. Write Getter & Setter methods for the 3 attributes.
*/

class Drink {
    private $name;
    private $image;
    private $price;

    // Constructor
    public function __construct($n, $i, $p) {
        // YOUR CODE GOES HERE
        $this->name = $n;
        $this->image = $i;
        $this->price = $p;
    }

    //============ Getters & Setters ============
    public function getName() {
        // YOUR CODE GOES HERE
        return $this->name;
    }

    public function setName($n) {
        // YOUR CODE GOES HERE
        $this->name = $n;
    }

    public function getImage() {
        // YOUR CODE GOES HERE
        return $this->image;
    }   

    public function setImage($i) {
        // YOUR CODE GOES HERE
        $this->image = $i;
    }

    public function getPrice() {
        // YOUR CODE GOES HERE
        return $this->price;
    }

    public function setPrice($p) {
        // YOUR CODE GOES HERE
        $this->price = $p;
    }
    //===========================================
}

?>