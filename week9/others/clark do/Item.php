<?php

// Item (Class)
// Item.php provides a "template" for all Item objects.

class Item {

    // Properties
    // What do all Item objects have in common?
    
    //Access Modifier private
    //cannot access from OUTSIDE this class definition
    private$id;
    private$description;
    private$price;
    private$inventory;

    // Constructor
    // Special method - invoked when someone does
    // new Item(...)    p for parameter so wont confuse with line,11,12,13
    // $pID = 'X123'
    public function __construct($pId, $pDesc, $pPrice, $pInven){
        //how to create an actual object
        $this->id = $pId;
        $this->description = $pDesc;
        $this->price = $pPrice;
        $this->inventory = $pInven;
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

    public function setInventory($new_value){
        $this->inventory = $new_value;
    }

    
    // Private method
    // Helper method, (private) for internal use only
    private function greet(){
        return "Hello World";
    }
}

?>