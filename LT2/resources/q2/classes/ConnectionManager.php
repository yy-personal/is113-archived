<!--
    Name: Lim Yin Yao
    Email: yinyao.lim.2020
-->
<?php

class ConnectionManager {

    public function connect() {
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'lt2q2';
        
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);     

        return $conn;
    }

}