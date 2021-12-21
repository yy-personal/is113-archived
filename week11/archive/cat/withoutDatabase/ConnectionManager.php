<?php

class ConnectionManager {

    public function connect() {
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'animals';
        $port = '3306';
        
        // Create connection
        $pdoObject = new PDO(
                "mysql:host=$servername;dbname=$dbname;port=$port", 
                $username,
                $password);

        $pdoObject->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // if fail, exception will be thrown

        // Return connection object
        return $pdoObject; // PDO object (containing MySQL connection info)
    }

}

