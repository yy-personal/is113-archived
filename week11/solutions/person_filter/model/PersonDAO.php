<?php
    class PersonDAO{

        # Retrieve all records from the person table and return them 
        # as an indexed array of Person objects
        public function retrieveAll(){
            $conn = new ConnectionManager();
            $pdo = $conn->getConnection();
            $sql = "Select * from person";
            $stmt = $pdo->prepare($sql);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            $result = [];
            while($row = $stmt->fetch()){
                $result[] = new Person($row["name"],$row["gender"],$row["age"]);
            }
            $stmt = null;
            $pdo = null;
            return $result;
        }

        # Retrieve all records from the person table whose
        # age >= $minAge and <= $maxAge and gender matches
        # $gender. If $gender == 'any', returns all records
        # that match the age criteria. Matching records are 
        # returned as an indexed array of Person objects. 
        public function search($minAge, $maxAge, $gender){
            $conn = new ConnectionManager();
            $pdo = $conn->getConnection();
            $sql = "select * from person where age >= :min_age and age <= :max_age";
            if ($gender === "m" || $gender === "f"){
                $sql .= " and gender=:gender";        
            }
            $stmt = $pdo->prepare($sql);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->bindParam("min_age",$minAge);
            $stmt->bindParam("max_age",$maxAge);
            if ($gender === "m" || $gender === "f"){
                $stmt->bindParam("gender",$gender);      
            }
            $stmt->execute();
            $result = [];
            while($row = $stmt->fetch()){
                $result[] = new Person($row["name"],$row["gender"],$row["age"]);
            }
            $stmt = null;
            $pdo = null;
            return $result;
        }
    }
?>