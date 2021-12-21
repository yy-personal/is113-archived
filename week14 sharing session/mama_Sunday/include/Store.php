<?php

class Store {

    private $name;  // String
    private $owner; // String
    private $dog;   // Dog object
    private $items; // Indexed Array of Item objects

    public function __construct($pName, $pOwner, $pDog) {
        $this->name = $pName;
        $this->owner = $pOwner;
        $this->dog = $pDog;
        $this->items = []; // Initialized to an empty array
    }

    public function getName() {
        return $this->name;
    }

    public function getOwner() {
        return $this->owner;
    }

    public function getDog() {
        return $this->dog;
    }

    public function getItems() {
        return $this->items;
    }

    public function addItem($itemObject) {
        $this->items[] = $itemObject;
    }
}

?>