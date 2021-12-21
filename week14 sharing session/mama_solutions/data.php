<?php

require_once 'include/Store.php';
require_once 'include/Item.php';

$store1 = new Store('East', 'Kim Jong Un'); // Store object
$store1->addItem(new Item('A123', "Supreme Shampoo", 5.75, 12));
$store1->addItem(new Item('B456', "Supreme Toothbrush", 3.50, 5));

$store2 = new Store('West', 'Kim Yo Jong');
$store2->addItem(new Item('C789', "Supreme Pencil", 1.25, 7));
$store2->addItem(new Item('D987', "Supreme Coffee", 4.75, 30));
$store2->addItem(new Item('E654', "Supreme Beer", 3.75, 100));

// This is an Indexed Array of Store objects
$inventory_array = [
    $store1, // Store object
    $store2  // Store object
];

// var_dump($inventory_array);

// Biz Question 1
// Give me all stores owned by a certain person named 'XYZ'?

// Biz Question 2
// Give me all stores whose total stock quantity > 200

?>