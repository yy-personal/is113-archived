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
$store1 = new Store('East', 'Kim Jong Un'); // Store object
$store1->addItem(new Item('A123', "Supreme Shampoo", 5.75, 12));
$store1->addItem(new Item('B456', "Supreme Toothbrush", 3.50, 5));

$store2 = new Store('West', 'Kim Yo Jong');
$store2->addItem(new Item('C789', "Supreme Pencil", 1.25, 7));
$store2->addItem(new Item('D987', "Supreme Coffee", 4.75, 30));
$store2->addItem(new Item('E654', "Supreme Beer", 3.75, 100));
}

?>