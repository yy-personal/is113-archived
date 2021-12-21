<?php

require_once 'include/Store.php';
require_once 'include/Item.php';
require_once 'include/Dog.php';

$store1 = new Store('East', 'Kim Jong Un', new Dog('Dirty', 'Male', 7)); // Store object
$store1->addItem(new Item('A123', "Supreme Shampoo", 5.75, 12));
$store1->addItem(new Item('B456', "Supreme Toothbrush", 3.50, 5));

$store2 = new Store('West', 'Kim Yo Jong', new Dog('Filthy', 'Female', 3));
$store2->addItem(new Item('C789', "Supreme Pencil", 1.25, 7));
$store2->addItem(new Item('D987', "Supreme Coffee", 4.75, 30));
$store2->addItem(new Item('E654', "Supreme Beer", 3.75, 100));

// This is an Indexed Array of Store objects
$inventory_array = [
    $store1, // Store object
    $store2  // Store object
];

// I am very grateful to data.php
// He gives me all data that he has

// Business Question 1
// Can you give me all stores whose total item quantity >= 500?

// Business Question 2
// Can you give me all items whose price is at max (inclusive of) 4.50?


?>