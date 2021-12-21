<?php

require_once 'include/StoreDAO.php';

$dao = new StoreDAO();
// var_dump($dao);

// // Test Case 1.1
// $store_name = 'East';
// $result = $dao->getStoreItems($store_name);
// var_dump($result);

// // Test Case 1.2
// $store_name = 'West';
// $result = $dao->getStoreItems($store_name);
// var_dump($result);

// // Test Case 1.3
// $store_name = 'Poop';
// $result = $dao->getStoreItems($store_name);
// var_dump($result);

// Test Case 2
$min_quantity = 20;
$result = $dao->getItemsByMinQuantity($min_quantity);
var_dump($result);

?>