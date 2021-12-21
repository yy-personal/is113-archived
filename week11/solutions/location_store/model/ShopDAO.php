<?php
    class ShopDAO{

        # Default constructor is created by default if no constructor is specified
        # Retrieve data from the database table - shop
    
        public function retrieveAll(){
            $conn = new ConnectionManager();
            $pdo = $conn->getConnection();

            $sql = "Select * from shop";
            $stmt = $pdo->prepare($sql);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            $result = [];
            while($row = $stmt->fetch()){
                $storeName = $row['shopname'];
                $location = $row['location'];

                $result[] = new Shop($storeName, $location);
            
            
            }
            $stmt = null;
            $pdo = null;
            return $result;
        }

        public function retrieveAllStoreName(){
                $conn = new ConnectionManager();
                $pdo = $conn->getConnection();
                $sql = "Select distinct shopname from shop";
                $stmt = $pdo->prepare($sql);
                $stmt->setFetchMode(PDO::FETCH_ASSOC);
                $stmt->execute();
                $result = [];
                while($row = $stmt->fetch()){
                    $result[] = $row["shopname"];
                }
                $stmt = null;
                $pdo = null;
                return $result;
        }

        public function retrieveAllLocation(){
            $conn = new ConnectionManager();
            $pdo = $conn->getConnection();
            $sql = "Select distinct location from shop";
            $stmt = $pdo->prepare($sql);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            $result = [];
            while($row = $stmt->fetch()){
                $result[] = $row["location"];
            }
            $pdo = null;
            $stmt = null;
            return $result;
        }

        public function retrieveLocationStorename($location1, $shopname1){
            
            $conn = new ConnectionManager();
            $pdo = $conn->getConnection();
            $sql = "SELECT * from shop where location = :location AND shopname = :shopname";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":location",$location1,PDO::PARAM_STR);
            $stmt->bindParam(":shopname",$shopname1,PDO::PARAM_STR);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            
            $result = false;
            while($row = $stmt->fetch()){
                $storeName = $row['shopname'];
                $location = $row['location'];

                $result = new Shop ($storeName, $location);

            }
            $pdo = null;
            $stmt = null;
            return $result;
        }

        
    }
?>