<?php

// DO NOT MODIFY THIS FILE

class UserDAO {
       
    public function get( $username ) {
        
        // connect to database
        $connMgr = new ConnectionManager();
        $pdo = $connMgr->getConnection();
        
        // prepare select
        $sql = "SELECT username, passwordHash, employeeType
                FROM user
                WHERE username = :username";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":username", $username, PDO::PARAM_STR);
        
        $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt->execute();
        
        $user = false;
        if ( $row = $stmt->fetch() ) {
            $user = new User($row["username"], $row["passwordHash"], $row['employeeType']);
        }
        
        // close connections
        $stmt = null;
        $conn = null;        
        
        return $user; // User object
    }

}