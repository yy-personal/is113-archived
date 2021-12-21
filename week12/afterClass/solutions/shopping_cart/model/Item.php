<?php 
class Item {
    private $name;
    private $price;
    private $quantity;

    function __construct($name,$price){
        $this->name = $name;
        $this->price = $price;
        $this->quantity = 0;
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function setQuantity($q) {
        $this->quantity = $q;
    }
}
?>