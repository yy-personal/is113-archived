<?php
class ConnectionManager {
    public function getConnection() {
        $servername = 'localhost';
        $dbname = 'week12extra';
        $username = 'root';
        $password = '';
        
        $dsn  = "mysql:host=$servername;dbname=$dbname";
        return new PDO($dsn, $username, $password);  
    }
}
?>