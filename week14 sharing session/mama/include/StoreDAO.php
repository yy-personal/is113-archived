<?php

require_once 'Store.php';
require_once 'Item.php';
require_once 'ConnectionManager.php';

class StoreDAO {

    private $stores;

    public function __construct() {
        // Pre-populate $stores (Indexed Array)
        $store1 = new Store('East', 'Kim Jong Un');
        $store1->addItem(new Item('A123', "Supreme Shampoo", 5.75, 12));
        $store1->addItem(new Item('B456', "Supreme Toothbrush", 3.50, 5));

        $store2 = new Store('West', 'Kim Yo Jong');
        $store2->addItem(new Item('C789', "Supreme Pencil", 1.25, 7));
        $store2->addItem(new Item('D987', "Supreme Coffee", 4.75, 30));
        $store2->addItem(new Item('E654', "Supreme Beer", 3.75, 100));

        $this->stores = [
            $store1,
            $store2
        ];
    }

    public function getAllStores() {
        // return an IndexedArray of Store objects
        return $this->stores;
    }

    // public function getStore($store_name) {

    //     // return a Store object
    //     foreach($this->stores as $storeObj){
    //         // var_dump($storeObj);
    //         if($storeObj->getName()==$store_name){
    //             return $storeObj;
    //         }
    //     }
    //     return null;
    // }

    public function getStoreItems($store_name) {
        // STEP 1
        // Connect to database 'animals'
        // See 'ConnectionManager.php'
        $connMgr = new ConnectionManager();
        $conn = $connMgr->connect();
        

        // STEP 2
        // Prepare SQL statement
        $sql = "SELECT * FROM item WHERE store_name = :store_name";
        $stmt = $conn->prepare($sql); // SQLStatement object
        $stmt->bindParam(':store_name', $store_name, PDO::PARAM_STR);

        // STEP 3
        // Run SQL
        $stmt->execute(); // RUN SQL
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        // STEP 4
        // Retrieve query results - ONE ROW AT A TIME
        $items = [];
        if ($stmt->execute()){
            //No way to get all matching rows in one shot
            while($row = $stmt->fetch()){
                // var_dump($row);
                $itemObj = new Item(
                    $row['id'],
                    $row['description'],
                    $row['price'],
                    $row['quantity']
                );
                $items[] = $itemObj;

            } //fetch something at current location
            
        }
        // STEP 5
        // Close DB Connection & SQL Statement
        $stmt = null; // clear memory
        $conn = null; // clear memory
        

        // STEP 6
        // YAY! We're ready to return the array!
        return $items;

    }

    public function getItemsByMinQuantity($min_quantity) {

        // return an IndexedArray of Item objects
    }

    public function getItemsByMaxPrice($max_price) {

        // return an IndexedArray of Item objects
    }
}

?>

