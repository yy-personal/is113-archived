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
        $stmt = $conn->prepare($sql); // SQLStatement object
        

        // STEP 3
        // Run SQL
        $stmt->execute(); // RUN SQL
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        // Retrieve each row as an Associative Array

        //Each row loooks like this
        // [
        //     'name' => 'Yimeng',
        //     'age' => 7,
        //     'gender' => 'F',
        //     'status' => 'P'
        // ]

        

        // STEP 4
        // Retrieve query results - ONE ROW AT A TIME
        $cats = []; // Array of Cat objects, empty now
        // Initialize an empty (indexed) Array
        // so I can return it to whoever called this function
        // Use WHILE loop to loop through
        while ( $row = $stmt->fetch() ) {
            // $row is an Associative Array
            /*
                [
                    'name' => 'Yimeng',
                    'age' => 7,
                    'gender' => 'F',
                    'status' => 'P'
                ]
            */
            $cat = new Cat( 
                        $row['name'], 
                        $row['age'], 
                        $row['gender'], 
                        $row['status'] 
                    ); // new Cat object
            $cats[] = $cat; // add Cat object to ret array
        }
        
        // STEP 5
        // Close DB Connection & SQL Statement
        $stmt = null; // clear memory
        $conn = null; // clear memory
        

        // STEP 6
        // YAY! We're ready to return the array!
        return $cats;
    }

    // returns an Indexed Array of cats with a given 'status'
    public function getCatsByStatus($status) {
        // $status == 'A' or 'P'

        // STEP 1
        // Connect to database 'animals'
        // See 'ConnectionManager.php'
        $connMgr = new ConnectionManager();
        $conn = $connMgr->connect();
        

        // STEP 2
        // Prepare SQL statement
        $sql = "SELECT name, age, gender, status 
                    FROM cat
                    WHERE status = :status ";

        $stmt = $conn->prepare($sql);
        // Parameter binding
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
            $cat = new Cat( 
                    $row['name'], 
                    $row['age'], 
                    $row['gender'], 
                    $row['status'] 
                );
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

    public function getCatsFilter($status, $gender, $max_age) {

        // STEP 1
        // Connect to database 'animals'
        $connMgr = new ConnectionManager();
        $conn = $connMgr->connect();
        

        // STEP 2
        // Prepare SQL statement
        $sql = "SELECT name, age, gender, status 
                FROM cat
                WHERE";
        
        $have_status = False;
        $have_gender = False;
        $have_max_age = False;

        if( $status == '-' )
            $sql .= " status IN ('A', 'P')";
        else {
            $sql .= " status = :status";
            $have_status = True;
        }

        if( $gender == 'M' || $gender == 'F' ) {
            $sql .= " AND gender = :gender";
            $have_gender = True;
        }

        if( $max_age != '' ) {
            $sql .= " AND age < :max_age";
            $have_max_age = True;
        }

        $stmt = $conn->prepare($sql);
        if( $have_status )
            $stmt->bindParam(':status', $status, PDO::PARAM_STR);
        if( $have_gender )
            $stmt->bindParam(':gender', $gender, PDO::PARAM_STR);
        if( $have_max_age )
            $stmt->bindParam(':max_age', $max_age, PDO::PARAM_INT);

        // STEP 3
        // Run SQL
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        // Retrieve each row as an Associative Array
        

        // STEP 4
        // Retrieve query results - ONE ROW AT A TIME
        $cats = [];
        while ($row = $stmt->fetch() ) {
            $cat = new Cat( 
                    $row['name'], 
                    $row['age'], 
                    $row['gender'], 
                    $row['status'] 
                );
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
