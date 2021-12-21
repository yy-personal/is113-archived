<?php

class Item {

    private $id;          // String
    private $description; // String
    private $price;       // Numeric
    private $quantity;    // Numeric

    public function __construct($pId, $pDescription, $pPrice, $pQuantity) {
        $this->id = $pId;
        $this->description = $pDescription;
        $this->price = $pPrice;
        $this->quantity = $pQuantity;
    }

    public function getId() {
        return $this->id;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getQuantity() {
        return $this->quantity;
    }
}

?>