<?php

class Product {

    private $id;    // type: int
    private $name;  // type: str
    private $price; // type: double
    private $stock; // associative array where the 
                   // key is the product's size (e.g. 'S', 'M', 'L')
                   // value is the quantity available for purchase(type: int)

    function __construct($id, $name, $price, $stock) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->stock = $stock;
    }

    public function getID() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getStock() {
        return $this->stock;
    }
    
    public function setStock($stock){
        $this->stock = $stock;
    }

    public function hasStock() {
        // YOUR CODE GOES HERE
        if(!empty($this->stock)){
            return true;
        }
        else{
            return false;
        }

    }

    public function hasStockBySize($pSize) {
        // YOUR CODE GOES HERE
        if(array_key_exists($pSize,$this->stock) && $this->stock[$pSize]>0){
            return true;
        }
        else{
            return false;
        }
        
        
    }
}
?>
