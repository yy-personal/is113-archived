<?php

require_once 'ConnectionManager.php';

class AccountDAO {

    public function getPassword($username) {

        // Step 1 - Connect to Database
        $connMgr = new ConnectionManager();
        $pdo = $connMgr->connect();

        // Step 2 - Prepare SQL
        $sql = "SELECT
                    password
                FROM
                    account_secure
                WHERE
                    username = :username
        ";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        
        // Step 3 - Execute SQL
        $password = null;
        
        if( $stmt->execute() ) {

            // Step 4 - Retrieve Query Results
            if( $row = $stmt->fetch() ) {
                $password = $row['password'];
            }
        }
        
        // Step 5 - Clear Resources
        $stmt = null;
        $pdo = null;

        // Step 6 - Return
        return $password; // String (plain text password)
    }
    
}

?>