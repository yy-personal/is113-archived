<?php

require_once 'Store.php';
require_once 'Item.php';
require_once 'ConnectionManager.php';

class StoreDAO {

    public function getAllStores() {
        
    }
    
    public function getStore($store_name) {

    }

    public function getStoreItems($store_name) {

        // Step 1 - Connect to Database
        $connMgr = new ConnectionManager();
        $pdo = $connMgr->connect();

        // Step 2 - Prepare SQL
        $sql = "
            SELECT
                id, description, price, quantity
            FROM
                item
            WHERE
                store_name = :store_name
        ";
        $stmt = $pdo->prepare($sql); // SQLStatement obj, FYI
        $stmt->bindParam(':store_name', $store_name, PDO::PARAM_STR);
        $stmt->setFetchMode(PDO::FETCH_ASSOC); // PDO::FETCH_NUM
        
        // Step 3 - Execute SQL
        $returnArray = []; // Indexed Array of Item object(s)
        if( $stmt->execute() ) {

            while( $row = $stmt->fetch() ) {
                // var_dump($row);
                $itemObj = new Item(
                    $row['id'],
                    $row['description'],
                    $row['price'],
                    $row['quantity'],
                );
                // var_dump($itemObj);
                $returnArray[] = $itemObj;
            }
        }
        
        // Step 5 - Clear Resources
        $stmt = null;
        $pdo = null;

        // Step 6 - Return an Indexed Array of Grade objects
        return $returnArray;
    }

    public function getItemsByMinQuantity($min_quantity) {

        // return an Indexed Array of Item objects
    }

    public function getItemsByMaxPrice($max_price) {

        // return an Indexed Array of Item objects
    }
}

?>