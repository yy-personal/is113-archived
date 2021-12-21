<?php

class Store {

    private $name;
    private $owner;
    private $items; // Indexed Array of Item objects

    public function __construct($pName, $pOwner) {
        $this->name = $pName;
        $this->owner = $pOwner;
        $this->items = [];
    }

    public function getName() {
        return $this->name;
    }

    public function getOwner() {
        return $this->owner;
    }

    public function addItem($itemObject) {
        $this->items[] = $itemObject;
    }

    public function getItems() {
        return $this->items;
    }
}

?>