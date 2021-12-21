<?php
    class EmploymentStatDAO{

        # Default constructor is created by default if no constructor is specified
       
        // Get all records
        public function retrieveAll(){
            $conn = new ConnectionManager();
            $pdo = $conn->getConnection();
            $sql = "Select * from employmentstat";
            $stmt = $pdo->prepare($sql);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            $result = [];
            while($row = $stmt->fetch()){
                $result[] = new EmploymentStat($row["id"],$row["year"],$row["university"],$row["school"],
                                                $row["degree"], $row["employment_rate"], $row["salary"]);
            }
            $stmt = null;
            $pdo = null;
            return $result;
        }

        // in the following, complete the given functions to search and update the employmentstat table in database


        // Add code to search records of a given university
        public function searchByUniversity($university){
            $conn = new ConnectionManager();
            $pdo = $conn->getConnection();
            $sql = "select * from employmentstat where university = :university";
         
            $stmt = $pdo->prepare($sql);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->bindParam("university",$university,PDO::PARAM_STR);
            
            $stmt->execute();
           
            $result = [];
            while($row = $stmt->fetch()){
                $result[] = new EmploymentStat($row["id"],$row["year"],$row["university"],$row["school"],
                                                $row["degree"], $row["employment_rate"], $row["salary"]);
            }
            $stmt = null;
            $pdo = null;
            return $result;
        }

         // Add code to search records of a given university and year
         public function searchByUniversity_Year($university, $year) {
            $conn = new ConnectionManager();
            $pdo = $conn->getConnection();
            $sql = "select * from employmentstat where university = :university
                            and year = :year";
         
            $stmt = $pdo->prepare($sql);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->bindParam("university",$university,PDO::PARAM_STR);
            $stmt->bindParam("year",$year,PDO::PARAM_INT);
            
            $stmt->execute();
            $result = [];
            while($row = $stmt->fetch()){
                $result[] = new EmploymentStat($row["id"],$row["year"],$row["university"],$row["school"],
                                                $row["degree"], $row["employment_rate"], $row["salary"]);
            }
            $stmt = null;
            $pdo = null;
            return $result;
        }

       
        // Add code to insert a new record into employmentstat table in database 
        public function add($employment) {
            $conn = new ConnectionManager();
            $pdo = $conn->getConnection();
            $sql = "insert into employmentstat (year, university, school, degree, 
                    employment_rate, salary) values (:year, :university, :school, :degree, :rate, :salary)";
            $stmt = $pdo->prepare($sql);
           
            $year = $employment->getYear();
            $university = $employment->getUniversity();
            $school = $employment->getSchool();
            $degree = $employment->getDegree();
            $rate = $employment->getEmploymentRate();
            $salary = $employment->getAvgSalary();

            $stmt->bindParam(":year",$year,PDO::PARAM_INT);
            $stmt->bindParam(":university",$university,PDO::PARAM_STR);
            $stmt->bindParam(":school", $school,PDO::PARAM_STR);
            $stmt->bindParam(":degree", $degree,PDO::PARAM_STR);
            $stmt->bindParam(":rate", $rate,PDO::PARAM_STR);
            $stmt->bindParam(":salary", $salary,PDO::PARAM_STR);

            $isOk = $stmt->execute();
              
            $stmt = null;
            $pdo = null;
            return $isOk;
        }

        // Add code to update employment rate and salary of a record, given the record's id
        public function update($id, $rate, $salary) {
            $conn = new ConnectionManager();
            $pdo = $conn->getConnection();
           
            $sql = "update employmentstat set employment_rate = :rate, 
                                    salary = :salary    where id = :id";
            $stmt = $pdo->prepare($sql);

            $stmt->bindParam(":id",$id,PDO::PARAM_INT);
            $stmt->bindParam(":rate",$rate,PDO::PARAM_STR);
            $stmt->bindParam(":salary",$salary,PDO::PARAM_STR);

            $isOk = $stmt->execute();
              
            $stmt = null;
            $pdo = null;
            return $isOk;
        }

        // Add code to delete a record from employmentstat table in database, given the record's id
        public function delete($id) {
            $conn = new ConnectionManager();
            $pdo = $conn->getConnection();

            $sql = "delete from employmentstat where id = :id";
            $stmt = $pdo->prepare($sql);
           
            $stmt->bindParam(":id",$id,PDO::PARAM_INT);
            
            $isOk = $stmt->execute();
              
            $stmt = null;
            $pdo = null;
            return $isOk;
        }

         /*
        // Add code to search records of a given university and school
        public function searchSchool($university, $school) {
            $conn = new ConnectionManager();
            $pdo = $conn->getConnection();
            $sql = "select * from employmentstat where university = :university
                            and school = :school";
         
            $stmt = $pdo->prepare($sql);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->bindParam("university",$university,PDO::PARAM_STR);
            $stmt->bindParam("school",$school,PDO::PARAM_STR);
            
            $stmt->execute();
            $result = [];
            while($row = $stmt->fetch()){
                $result[] = new Employment($row["id"],$row["year"],$row["university"],$row["school"],
                                                $row["degree"], $row["employment_rate"], $row["salary"]);
            }
            $stmt = null;
            $pdo = null;
            return $result;
        }

        // Add code to search records of a given university, school, and year
        public function searchYear($university, $school, $year) {
            $conn = new ConnectionManager();
            $pdo = $conn->getConnection();
            $sql = "select * from employmentstat where university = :university
                            and school = :school and year = :year";
         
            $stmt = $pdo->prepare($sql);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->bindParam("university",$university,PDO::PARAM_STR);
            $stmt->bindParam("school",$school,PDO::PARAM_STR);
            $stmt->bindParam("year",$school,PDO::PARAM_INT);
            
            $stmt->execute();
            $result = [];
            while($row = $stmt->fetch()){
                $result[] = new Employment($row["id"],$row["year"],$row["university"],$row["school"],
                                                $row["degree"], $row["employment_rate"], $row["salary"]);
            }
            $stmt = null;
            $pdo = null;
            return $result;
        }
        */ 
    }
?>