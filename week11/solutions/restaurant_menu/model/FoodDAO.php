<?php
    class FoodDAO{

        # Default constructor is created by default if no constructor is specified

        // Retrieve ALL data from the table and sorted by the SKU
        // Return an indexed array of Food objects
        public function retrieveAll(){
            $conn = new ConnectionManager();
            $pdo = $conn->getConnection();
            $sql = "SELECT * from food ORDER BY sku";
            $stmt = $pdo->prepare($sql);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            $result = [];
            while($row = $stmt->fetch()){
                $result[] = new Food($row["sku"], $row["fooddesc"],$row["category"],$row["price"]);
            }
            $stmt = null;
            $pdo = null;
            return $result;
        }

        // Retrieve data only for the sku. This function can also be used to check if sku exists.
        // Return an indexed array of Food object
        public function getFoodbyID($sku){
            $conn = new ConnectionManager();
            $pdo = $conn->getConnection();
            $sql = "SELECT * from food where sku = :sku";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":sku",$sku,PDO::PARAM_STR);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            //$result = [];
            //while($row = $stmt->fetch()){
            //    $result[] = new Food($row["sku"], $row["fooddesc"],$row["category"],$row["price"]);
            //}
            $row = $stmt->fetch();
            $result = new Food($row["sku"], $row["fooddesc"],$row["category"],$row["price"]);
            $stmt = null;
            $pdo = null;
            return $result;
        }

        // Create a new record into the database
        // Return a status
        public function addFood($sku, $foodDesc, $category, $price) {
            $conn = new ConnectionManager();
            $pdo = $conn->getConnection();
            $sql = "insert into food (sku, fooddesc, category, price) values (:sku, :fooddesc, :category, :price)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":sku",$sku,PDO::PARAM_STR);
            $stmt->bindParam(":fooddesc",$foodDesc,PDO::PARAM_STR);
            $stmt->bindParam(":category",$category,PDO::PARAM_STR);
            $stmt->bindParam(":price",$price,PDO::PARAM_STR);
            $isOk = $stmt->execute();
            $stmt = null;
            $pdo = null;
            return $isOk;
        }


        // Updates a record in the database
        // Return a status
        public function UpdateFood($sku, $foodDesc, $category, $price){
            $conn = new ConnectionManager();
            $pdo = $conn->getConnection();
            $sql = "UPDATE food SET fooddesc = :fooddesc, category = :category, price = :price WHERE sku = :sku";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":sku",$sku,PDO::PARAM_INT);
            $stmt->bindParam(":fooddesc",$foodDesc,PDO::PARAM_STR);
            $stmt->bindParam(":category",$category,PDO::PARAM_STR);
            $stmt->bindParam(":price",$price,PDO::PARAM_STR);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $isOk = $stmt->execute();
            $stmt = null;
            $pdo = null;
            return $isOk;
        }

        // Delete a record in the database
        // Return a status
        public function DeleteFood($sku){
            $conn = new ConnectionManager();
            $pdo = $conn->getConnection();
            $sql = "DELETE FROM food WHERE sku = :sku";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":sku",$sku,PDO::PARAM_STR);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $isOk = $stmt->execute();
            $stmt = null;
            $pdo = null;
            return $isOk;
        }

    }


?>