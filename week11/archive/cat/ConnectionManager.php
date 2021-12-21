<?php
//Given in LT
class ConnectionManager {

    public function connect() {
        $servername = 'localhost'; //hostname ip address
        $username = 'root';
        $password = '';
        $dbname = 'animals'; //schema
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

