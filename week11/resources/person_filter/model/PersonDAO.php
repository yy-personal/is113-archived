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
                $result[] = new Person($row['name'],$row['gender'],$row['age']);
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
            # Enter code here
            // YOUR CODE GOES HERE
            $conn = new ConnectionManager();
            $pdo = $conn->getConnection(); 

            $sql =  "SELECT * FROM person WHERE age >= :minAge and age <= :maxAge";
            if($gender != 'a'){
                $sql .= " AND gender = :gender"; //REMEMBER THE SPACING
            }
            $stmt = $pdo->prepare($sql); 
            $stmt ->bindParam(':maxAge', $maxAge, PDO:: PARAM_INT);
            $stmt ->bindParam(':minAge', $minAge, PDO:: PARAM_INT);
            if($gender != 'a'){
                $stmt ->bindParam(':gender', $gender, PDO:: PARAM_STR);
            }

            $stmt -> setFetchMode(PDO:: FETCH_ASSOC);
            $stmt -> execute();
            $persons = []; 
            while($row = $stmt -> fetch()){ 
                $person = new Person($row['name'],$row['gender'],$row['age']);
                $persons[] = $person;
            }

            return $persons;
        }
    }
?>