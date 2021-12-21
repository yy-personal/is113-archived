<?php

// If you want to borrow the class definition of Item
// Which file should you import here?
// How do we import from another PHP file?
require_once "item.php";

// Create $myItem with details: 'X123', 'Supreme Coffee', 15.75, 30
// Create $yourItem with details: 'Y456', 'Supreme Knife', 22.50, 20
$myItem = new Item('X123', 'Supreme Coffee', 15.75, 30);
$youritem = new Item('Y456', 'Supreme Knife', 22.50, 20);
// Display $myItem's 1) description, 2) price
// HINT: must use Getter methods
echo $myItem->getId() . "<br>";
echo $myItem->getPrice() . "<br>";
echo "<br><br>";


// Display $myItem's price and inventory
echo "Before update, myItem price USD: {$myItem->getPrice()}<br>";
echo "Before update, myItem inventory: {$myItem->getInven()}<br>";



// Update price to 20.99 and inventory to 10
// HINT: must use Setter methods
$myItem->setPrice(20.99);
$myItem->setInventory(10);

// (After update) Display $myItem's price and inventory
echo "After update, myItem price USD: {$myItem->getPrice()}<br>";
echo "After update, myItem inventory: {$myItem->getInven()}<br>";

?>