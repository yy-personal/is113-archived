<?php
class ConnectionManager {

  public function getConnection() {
    $servername = "localhost";
    $username = "root";
    $password = "";  
    $dbname = "week11extras";
    
    return new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);     
  }
 
}
?>