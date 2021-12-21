<?php

class UserDAO {
       
    function get( $username ) {
        
        // connect to database
        $connMgr = new ConnectionManager();
        $conn = $connMgr->connect();
        
        // prepare select
        $sql = "SELECT username, password_hash  FROM useraccount WHERE username = :username";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":username", $username, PDO::PARAM_STR);
            
        $user = null;
        if ( $stmt->execute() ) {
            
            while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
                $user = new User($row["username"], $row["password_hash"]);
            }
            
        }
        else {
            $connMgr->handleError( $stmt, $sql );
        }
        
        // close connections
        $stmt = null;
        $conn = null;        
        
        return $user;
    }
    
    function create($user) {
        $result = true;

        // connect to database
        $connMgr = new ConnectionManager();
        $conn = $connMgr->connect();
        
        // prepare insert
        $sql = "INSERT INTO useraccount (username, password_hash) VALUES (:username, :passwordHash)";
        $stmt = $conn->prepare($sql);
        
        $username = $user->getUsername();
        $passwordHash = $user->getPasswordHash();

        $stmt->bindParam(":username", $username, PDO::PARAM_STR);
        $stmt->bindParam(":passwordHash", $passwordHash, PDO::PARAM_STR);
        

        $result = $stmt->execute();
        if (! $result ){ // encountered error
            $parameters = [ "user" => $user, ];
            $connMgr->handleError( $stmt, $sql, $parameters );
        }
        
        // close connections
        $stmt = null;
        $conn = null;        
        
        return $result;
    }


    function update($user) {
        $result = true;

        // connect to database
        $connMgr = new ConnectionManager();
        $conn = $connMgr->connect();
        
        // prepare insert
        $sql = "UPDATE useraccount SET password_hash = :passwordHash  WHERE username = :username";
        $stmt = $conn->prepare($sql);
        
        $username = $user->getUsername();
        $passwordHash = $user->getPasswordHash();

        $stmt->bindParam(":username", $username, PDO::PARAM_STR);
        $stmt->bindParam(":passwordHash", $passwordHash, PDO::PARAM_STR);
        

        $result = $stmt->execute();
        if (! $result ){ // encountered error
            $parameters = [ "user" => $user, ];
            $connMgr->handleError( $stmt, $sql, $parameters );
        }
        
        // close connections
        $stmt = null;
        $conn = null;        
        
        return $result;
    }
}