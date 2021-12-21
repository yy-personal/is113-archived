<?php

class Vehicle {
    private $purchaseYear; // Integer
    private $id;           // Integer

    public function __construct($pPurchaseYear, $pId) {
        $this->purchaseYear = $pPurchaseYear;
        $this->id = $pId;
    }

    public function getPurchaseYear() {
        return $this->purchaseYear;
    }

    public function getId() {
        return $this->id;
    }
}