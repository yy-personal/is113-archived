<?php

// Item (Class)
// Item.php provides a "template" for all Item objects.

class Item {

    // Properties
    // What do all Item objects have in common?
    private $id;
    private $description;
    private $price;
    private $inventory;


    // Constructor
    // Special method - invoked when someone does
    // new Item(...)
    public function __construct($pid, $pdesc,$pprice,$pinventory)
    {
        $this->id = $pid;
        $this->description = $pdesc;
        $this->price = $pprice;
        $this->inventory = $pinventory;
    }


    // Getter methods
    public function getId(){
        return $this->id;
    }

    public function getPrice(){
        return $this->price;
    }   

    public function getDesc(){
        return $this->description;
    }

    public function getInven(){
        return $this->inventory;
    }


    // Setter methods
    public function setPrice($new_value){
        $this->price = $new_value;
    }
    public function setInventory($new_inventory){
        $this->inventory = $new_inventory;
    }

    
    // Public method
    public function info(){
        return "Manufactured by North Korea";
    }
}

?>