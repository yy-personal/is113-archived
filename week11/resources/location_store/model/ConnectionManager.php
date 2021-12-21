<?php
class ConnectionManager {

  public function getConnection() {
    $servername = "localhost";
    $username = "root";
    $password = "";  
    $dbname = "week11extrasq4";
    
    return new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);     
  }
 
}
?>