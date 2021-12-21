<?php

require_once 'include/StoreDAO.php';

$dao = new StoreDAO(); // invoke StoreDAO's constructor

// Test Case 1
// $result = $dao->getAllStores();
// var_dump($result);

// Test Case 2.1
// $store_name = 'East';
// $result = $dao->getStore($store_name);
// var_dump($result);

// // Test Case 2.2
// $store_name = 'West';
// $result = $dao->getStore($store_name);
// var_dump($result);

// // Test Case 2.3
// $store_name = 'aslkdfjlkasjdfkl';
// $result = $dao->getStore($store_name);
// var_dump($result);

// Test Case 3.1
$store_name = 'East';
$result = $dao->getStoreItems($store_name);
var_dump($result);

// Test Case 3.2
$store_name = 'West';
$result = $dao->getStoreItems($store_name);
var_dump($result);

// Test Case 3.3
$store_name = 'asldkjflkasjdklfj';
$result = $dao->getStoreItems($store_name);
var_dump($result);

?>