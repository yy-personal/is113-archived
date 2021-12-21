<?php
    class ProductDAO{

        # Default constructor is created by default if no constructor is specified

        public function retrieveAll(){
            $conn = new ConnectionManager();
            $pdo = $conn->getConnection();
            $sql = "Select * from product";
            $stmt = $pdo->prepare($sql);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            $result = [];
            while($row = $stmt->fetch()){
                $result[] = new Product($row["shopname"],$row["item"],$row["category"],$row["price"]);
            }
            $stmt = null;
            $pdo = null;
            return $result;
        }

        public function retrieveByStoreName($shopname){
            $conn = new ConnectionManager();
            $pdo = $conn->getConnection();
            $sql = "Select * from product where shopname = :shopname";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":shopname",$shopname,PDO::PARAM_STR);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            $result = [];
            while($row = $stmt->fetch()){
                $result[] = new Product($row["shopname"],$row["item"],$row["category"],$row["price"]);
            }
            $stmt = null;
            $pdo = null;
            return $result;
        }
    }
?>