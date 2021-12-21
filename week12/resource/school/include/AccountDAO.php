<?php

require_once 'ConnectionManager.php';

class AccountDAO {

    /*
    This method authenticates given username/password
    against the 'account' database table.

    INPUT
        $username (String)
        $password (String)

    OUTPUT
        Return:
            Boolean True (if username/password combo is found in account)
            Boolean False (otherwise)
    */
    public function authenticate($username, $password) {

        $connMgr = new ConnectionManager();
        $conn = $connMgr->connect();

        $sql = "SELECT * FROM account where username = :username AND password = :password";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR);

         // RUN SQL
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $isValid = False;
        if($stmt->execute()){
            if($stmt->rowCount() > 0){
                $isValid = true;
            }
        }
        $stmt = null; 
        $conn = null;
        
        return $isValid;
    }
    
}

?>