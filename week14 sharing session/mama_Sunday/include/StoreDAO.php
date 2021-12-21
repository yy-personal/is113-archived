<?php

require_once 'Store.php';
require_once 'Item.php';
require_once 'Dog.php';
require_once 'ConnectionManager.php';

class StoreDAO { // DAO classes facilitates data fetching!

    // There's NO data here
    // Data must come from MySQL database :D

    public function getAllStores() {
        // return an Indexed Array of Store objects
        return $this->stores;
    }

    public function getStore($store_name) {

        // return a Store object
    }

    /*
    INPUT:
        $store_name (String)
    OUTPUT:
        An indexed array of Item objects (if $store_name is found)
        An empty array (if $store_name is NOT found)
    */
    public function getStoreItems($store_name) {
        // STEP 1
        $connMgr = new ConnectionManager();
        $pdo = $connMgr->connect(); // PDO object
        
        // STEP 2 - Write & Register SQL
        $sql = "
            SELECT
                id, description, price, quantity
            FROM
                item
            WHERE
                store_name = :store_name
        ";
        $stmt = $pdo->prepare($sql); // SQLStatement object
        $stmt->bindParam(':store_name', $store_name, PDO::PARAM_STR);


        // STEP 3
        $stmt->execute(); // RUN SQL
        $stmt->setFetchMode(PDO::FETCH_ASSOC); // row --> assoc array
        // FETCH_NUM, row --> indexed array


        // STEP 4
        // Fetch rows
        $returnArray = [];
        while( $row = $stmt->fetch() ) {
            // var_dump($row);
            $itemObject = new Item(
                $row['id'],
                $row['description'],
                $row['price'],
                $row['quantity']
            );
            // var_dump($itemObject);
            $returnArray[] = $itemObject;
        }
        
        // STEP 5 (optional, good programmer)
        $stmt = null; // clear memory
        $pdo = null; // clear memory

        
        // STEP 6
        return $returnArray; // Indexed Array of (found) Item objects
    }

    public function getItemsByMinQuantity($min_quantity) {
        // STEP 1
        $connMgr = new ConnectionManager();
        $pdo = $connMgr->connect(); // PDO object
        
        // STEP 2 - Write & Register SQL
        $sql = "
            SELECT
                id, price, quantity, description
            FROM
                item
            WHERE
                quantity >= :min_quantity
        ";
        $stmt = $pdo->prepare($sql); // SQLStatement object
        $stmt->bindParam(':min_quantity', $min_quantity, PDO::PARAM_INT);
        // 3.241 PDO::PARAM_STR important!


        // STEP 3
        $stmt->execute(); // RUN SQL
        $stmt->setFetchMode(PDO::FETCH_NUM);


        // STEP 4
        // Fetch rows
        $returnArray = [];
        while( $row = $stmt->fetch() ) {
            // var_dump($row);
            $itemObject = new Item(
                $row[0],
                $row[1],
                $row[2],
                $row[3]
            );
            // var_dump($itemObject);
            $returnArray[] = $itemObject;
        }
        
        // STEP 5 (optional, good programmer)
        $stmt = null; // clear memory
        $pdo = null; // clear memory

        
        // STEP 6
        return $returnArray; // Indexed Array of (found) Item objects
    }

    public function getItemsByMaxPrice($max_price) {

        // return an Indexed Array of Item objects
    }

}

?>