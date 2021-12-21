<?php

class ConnectionManager {

    public function getConnection() {
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'week13';
        $port = '3306';
        
        // Create connection
        $pdo = new PDO("mysql:host=$servername;dbname=$dbname;port=$port",
                        $username,
                        $password);     

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // if fail, exception will be thrown

        // Return connection object
        return $pdo;
    }

}