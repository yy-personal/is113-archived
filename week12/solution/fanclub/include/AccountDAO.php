<?php

require_once 'common.php';

class AccountDAO {

    public function getHashedPassword($username) {

        // Step 1 - Connect to Database
        $connMgr = new ConnectionManager();
        $pdo = $connMgr->getConnection();

        // Step 2 - Prepare SQL
        $sql = "SELECT
                    hashed_password
                FROM
                    account
                WHERE
                    username = :username
        ";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        
        // Step 3 - Execute SQL
        $hashed_password = null;
        
        if( $stmt->execute() ) {

            // Step 4 - Retrieve Query Results
            if( $row = $stmt->fetch() ) {
                $hashed_password = $row['hashed_password'];
            }
        }
        
        // Step 5 - Clear Resources
        $stmt = null;
        $pdo = null;

        // Step 6 - Return
        return $hashed_password;
    }

    public function register($username, $hashed_password) {

        // Step 1 - Connect to Database
        $connMgr = new ConnectionManager();
        $pdo = $connMgr->getConnection();

        // Step 2 - Prepare SQL
        $sql = "INSERT INTO account VALUES (
                    :username, :hashed_password
                )
        ";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->bindParam(':hashed_password', $hashed_password, PDO::PARAM_STR);
        
        // Step 3 - Execute SQL
        $result = $stmt->execute();
        
        // Step 5 - Clear Resources
        $stmt = null;
        $pdo = null;

        // Step 6 - Return
        return $result;
    }
    
}

?>