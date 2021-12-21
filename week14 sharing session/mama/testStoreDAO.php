<?php

require_once './include/StoreDAO.php';

$dao = new StoreDAO(); //Invoke StoreDAO Constructor.

//
// $all_stores = $dao->getAllStores();
// var_dump($all_stores);
//
// $store_name = 'East';
// $result = $dao->getStore($store_name);
// var_dump($result);

// $store_name = 'West';
// $result = $dao->getStore($store_name);
// var_dump($result);

// $store_name = 'sadasdsa';
// $result = $dao->getStore($store_name);
// var_dump($result);
//

$store_name = 'East';
$result = $dao->getStoreItems($store_name);
var_dump($result);
?>