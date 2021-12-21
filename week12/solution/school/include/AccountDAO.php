<?php

require_once 'ConnectionManager.php';

class AccountDAO {

    public function authenticate($username, $password) {

        // Step 1 - Connect to Database
        $connMgr = new ConnectionManager();
        $pdo = $connMgr->connect();

        // Step 2 - Prepare SQL
        $sql = "SELECT
                    *
                FROM
                    account
                WHERE
                    username = :username
                    AND
                    password = :password
        ";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        
        // Step 3 - Execute SQL
        $isValid = False;
        
        if( $stmt->execute() ) {

            // Step 4 - Retrieve Query Results
            if( $stmt->rowCount() > 0 ) {
                $isValid = True;
            }
        }
        
        // Step 5 - Clear Resources
        $stmt = null;
        $pdo = null;

        // Step 6 - Return
        return $isValid;
    }
    
}

?>