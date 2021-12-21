<?php

require_once 'Cat.php';
require_once 'ConnectionManager.php';

class CatDAO {
    
    // This public function is callable from OUTSIDE 'CatDAO' class
    // By calling this function, the caller can retrieve ALL rows from 'cat' Database table
    // It returns an indexed Array of Cat objects
    public function getCats() {
        
        // STEP 1
        // Connect to database 'animals'
        // See 'ConnectionManager.php'
        $connMgr = new ConnectionManager();
        $conn = $connMgr->connect();
        

        // STEP 2
        // Prepare SQL statement
        $sql = "SELECT name, age, gender, status FROM cat";
        $stmt = $conn->prepare($sql);
        

        // STEP 3
        // Run SQL
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        // Retrieve each row as an Associative Array
        

        // STEP 4
        // Retrieve query results - ONE ROW AT A TIME
        $cats = [];
        // Initialize an empty (indexed) Array
        // so I can return it to whoever called this function
        // Use WHILE loop to loop through
        while ($row = $stmt->fetch() ) {
            $cat = new Cat( $row['name'], $row['age'], $row['gender'], $row['status'] );
            $cats[] = $cat;
        }

        
        // STEP 5
        // Close DB Connection & SQL Statement
        $stmt = null;
        $conn = null;        
        

        // STEP 6
        // YAY! We're ready to return the array!
        return $cats;
    }

    // returns an Indexed Array of cats with a given 'status'
    public function getCatsByStatus($status) {
        // STEP 1
        // Connect to database 'animals'
        // See 'ConnectionManager.php'
        $connMgr = new ConnectionManager();
        $conn = $connMgr->connect();
        

        // STEP 2
        // Prepare SQL statement
        $sql = "SELECT name, age, gender, status FROM cat WHERE status = :status ";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':status', $status, PDO::PARAM_STR);
        

        // STEP 3
        // Run SQL
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        // Retrieve each row as an Associative Array
        

        // STEP 4
        // Retrieve query results - ONE ROW AT A TIME
        $cats = [];
        // Initialize an empty (indexed) Array
        // so I can return it to whoever called this function
        // Use WHILE loop to loop through
        while ($row = $stmt->fetch() ) {
            $cat = new Cat( $row['name'], $row['age'], $row['gender'], $row['status'] );
            $cats[] = $cat;
        }

        
        // STEP 5
        // Close DB Connection & SQL Statement
        $stmt = null;
        $conn = null;        
        

        // STEP 6
        // YAY! We're ready to return the array!
        return $cats;
    }

}
