<?php

require_once 'ConnectionManager.php';
require_once 'Grade.php';

class GradeDAO {
    
    // Retrieve a row from table grade where email == $email
    // If no matching row is found, return null
    public function retrieve($email) {

        // Step 1 - Connect to Database
        $connMgr = new ConnectionManager();
        $pdo = $connMgr->connect();

        // Step 2 - Prepare SQL
        $sql = "SELECT * 
                FROM grade 
                WHERE email = :email";

        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        
        // Step 3 - Execute SQL
        $return_grade = null;

        if( $stmt->execute() ) {
        
            // Step 4 - Retrieve Query Results
            if( $row = $stmt->fetch() ) {
                $return_grade = new Grade($row['email'], 
                                    $row['status'],
                                    $row['q1'],
                                    $row['q2'],
                                    $row['q3']
                    );
            }
        }
        
        // Step 5 - Clear Resources
        $stmt = null;
        $pdo = null;

        // Step 6 - Return
        return $return_grade;
    }


    // Retrieve a row from table grade where email == $email
    //    Retrieve only columns q1, q2, q3
    //
    // If matching row is found:
    //    Create an Indexed Array of THREE (3) integers (q1, q2, q3 as retrieved from table grade)
    //    Return this Indexed Array
    // E.g. $components = [8, 7, 2]
    //
    // If no matching row is found, return an empty Indexed Array
    public function retrieveComponents($email) {

        // Step 1 - Connect to Database
        $connMgr = new ConnectionManager();
        $pdo = $connMgr->connect();

        // Step 2 - Prepare SQL
        $sql = "SELECT q1, q2, q3 
                FROM grade 
                WHERE email = :email";
                
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        
        // Step 3 - Execute SQL
        $components = [];
        if( $stmt->execute() ) {

            // Step 4 - Retrieve Query Results
            if( $row = $stmt->fetch() ) {
                $components[] = $row['q1'];
                $components[] = $row['q2'];
                $components[] = $row['q3'];
            }
        }
        
        // Step 5 - Clear Resources
        $stmt = null;
        $pdo = null;

        // Step 6 - Return
        return $components;
    }
}


?>