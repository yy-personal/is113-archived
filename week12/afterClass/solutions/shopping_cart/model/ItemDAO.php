<?php
    require_once "autoload.php";

    class ItemDAO {

        function retrieveAll(){
            $conn = new ConnectionManager();
            $pdo = $conn->getConnection();
            $sql = "Select * from item";
            $stmt = $pdo->prepare($sql);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            $result = [];
            while($row = $stmt->fetch()){
                $result[] = new Item($row["name"],$row["price"]);
            }
            $stmt = null;
            $pdo = null;
            return $result;
        }

    }
?>