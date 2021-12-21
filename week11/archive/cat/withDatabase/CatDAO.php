<?php

require_once 'Cat.php';
require_once 'ConnectionManager.php';
class CatDAO {
    
    // Whoever needs $cats, call this Getter method
    public function getCats() {

        // YOUR CODE GOES HERE
        //STEP 1 Connect to mysql schema animals
        $connectionmanager = new ConnectionManager();
        $pdo = $connectionmanager->connect(); //PDO Object

        //STEP 2 formulate sql statement
        $sql ="SELECT * FROM account"; //Current just string, need to register this stirng to PDO.
        $stmt = $pdo->prepare($sql); //PDOStatement object

        //STEP 3  execute the SQL statement
        $stmt -> execute();//Run SQL Statement  
        $stmt -> setFetchMode(PDO:: FETCH_ASSOC); //Convert the statement into associative array?
        // $stmt -> setFetchMode(PDO:: FETCH_NUM); //Each row retrieved as Indexed array.

        //STEP 4 Retrive Data
        $cats = []; //Indexed Array of Cat objects
        while($row = $stmt -> fetch()){ //fetch the current row curser is pointing
        

            //Retrieve tis row's columns
            //name, age, gender, stats
            $cat = new Cat(
                    $row['name'],
                    $row['age'],
                    $row['gender'],
                    $row['status']);

            //Convert this into a new cat object
            //Insert this new cat object inot cats
            $cats[] = $cat;
        }; 

        //Optional STEP 5 on clearing resources
        $stmt = null;// clear resources
        $pdo = null;

        //STEP 6 Return an Indexed array of cat object
        return $cats;
    }

    public function getCats2() {

        // YOUR CODE GOES HERE
        //STEP 1 Connect to mysql schema animals
        $connectionmanager = new ConnectionManager();
        $pdo = $connectionmanager->connect(); //PDO Object

        //STEP 2 formulate sql statement
        $sql ="SELECT * FROM cat"; //Current just string, need to register this stirng to PDO.
        $stmt = $pdo->prepare($sql); //PDOStatement object

        //STEP 3  execute the SQL statement
        $stmt -> execute();//Run SQL Statement  
        // $stmt -> setFetchMode(PDO:: FETCH_ASSOC); //Convert the statement into associative array?
        $stmt -> setFetchMode(PDO:: FETCH_NUM); //Each row retrieved as Indexed array.

        //STEP 4 Retrive Data
        $cats = []; //Indexed Array of Cat objects
        while($row = $stmt -> fetch()){ //fetch the current row curser is pointing
        

            //Retrieve tis row's columns
            //name, age, gender, stats
            $cat = new Cat(
                            $row[0],
                            $row[1],
                            $row[2],
                            $row[3]);

            //Convert this into a new cat object
            //Insert this new cat object inot cats
            $cats[] = $cat;
        }; 

        //Optional STEP 5 on clearing resources
        $stmt = null;// clear resources
        $pdo = null;

        //STEP 6 Return an Indexed array of cat object
        return $cats;
    }
    
    public function getCatsByStatus($status) {

        // YOUR CODE GOES HERE
        //STEP 1 Connect to mysql schema animals
        $connectionmanager = new ConnectionManager();
        $pdo = $connectionmanager->connect(); //PDO Object

        //STEP 2 formulate sql statement
        $sql =  "SELECT name, age, gender, status FROM cat WHERE status = :status"; //Current just string, need to register this stirng to PDO.
        $stmt = $pdo->prepare($sql); //PDOStatement object

        //STEP 3  execute the SQL statement
        $stmt -> execute();//Run SQL Statement  
        $stmt -> setFetchMode(PDO:: FETCH_NUM); //Each row retrieved as Indexed array.

        //STEP 4 Retrive Data
        $cats = []; //Indexed Array of Cat objects
        while($row = $stmt -> fetch()){ //fetch the current row curser is pointing
        

            //Retrieve tis row's columns
            //name, age, gender, stats
            $cat = new Cat(
                            $row[0],
                            $row[1],
                            $row[2],
                            $row[3]);

            //Convert this into a new cat object
            //Insert this new cat object inot cats
            $cats[] = $cat;
        }; 

        //Optional STEP 5 on clearing resources
        $stmt = null;// clear resources
        $pdo = null;

        //STEP 6 Return an Indexed array of cat object
        return $cats;
    }

    public function getCatsByGender($gender) {

        // YOUR CODE GOES HERE
        //STEP 1 Connect to mysql schema animals
        $connectionmanager = new ConnectionManager();
        $pdo = $connectionmanager->connect(); //PDO Object

        //STEP 2 formulate sql statement
        $sql =  "SELECT name, age, gender, status FROM cat WHERE gender = :gender"; //Current just string, need to register this stirng to PDO.
        $stmt = $pdo->prepare($sql); //PDOStatement object
        $stmt ->bindParam(':gender', $gender, PDO:: PARAM_STR);

        //STEP 3  execute the SQL statement
        $stmt -> execute();//Run SQL Statement  
        $stmt -> setFetchMode(PDO:: FETCH_NUM); //Each row retrieved as Indexed array.

        //STEP 4 Retrive Data
        $cats = []; //Indexed Array of Cat objects
        while($row = $stmt -> fetch()){ //fetch the current row curser is pointing
        

            //Retrieve tis row's columns
            //name, age, gender, stats
            $cat = new Cat(
                            $row[0],
                            $row[1],
                            $row[2],
                            $row[3]);

            //Convert this into a new cat object
            //Insert this new cat object inot cats
            $cats[] = $cat;
        }; 

        //Optional STEP 5 on clearing resources
        $stmt = null;// clear resources
        $pdo = null;

        //STEP 6 Return an Indexed array of cat object
        return $cats;
    }
    
    public function getCatsByGenderStatus($gender, $status) {

        // YOUR CODE GOES HERE
        //STEP 1 Connect to mysql schema animals
        $connectionmanager = new ConnectionManager();
        $pdo = $connectionmanager->connect(); //PDO Object

        //STEP 2 formulate sql statement
        $sql =  "SELECT name, age, gender, status FROM cat WHERE gender = :gender AND status = :status" ; //Current just string, need to register this stirng to PDO.
        $stmt = $pdo->prepare($sql); //PDOStatement object
        $stmt ->bindParam(':gender', $gender, PDO:: PARAM_STR);
        $stmt ->bindParam(':status', $status, PDO:: PARAM_STR);

        //STEP 3  execute the SQL statement
        $stmt -> execute();//Run SQL Statement  
        $stmt -> setFetchMode(PDO:: FETCH_NUM); //Each row retrieved as Indexed array.

        //STEP 4 Retrive Data
        $cats = []; //Indexed Array of Cat objects
        while($row = $stmt -> fetch()){ //fetch the current row curser is pointing
        

            //Retrieve tis row's columns
            //name, age, gender, stats
            $cat = new Cat(
                            $row[0],
                            $row[1],
                            $row[2],
                            $row[3]);

            //Convert this into a new cat object
            //Insert this new cat object inot cats
            $cats[] = $cat;
        }; 

        //Optional STEP 5 on clearing resources
        $stmt = null;// clear resources
        $pdo = null;

        //STEP 6 Return an Indexed array of cat object
        return $cats;
    }
    public function getCatsFilter($status, $gender, $max_age) {

        // YOUR CODE GOES HERE
        //STEP 1 Connect to mysql schema animals
        $connectionmanager = new ConnectionManager();
        $pdo = $connectionmanager->connect(); //PDO Object

        //STEP 2 formulate sql statement
        
        
        $sql =  "SELECT * FROM cat WHERE" ; //Current just string, need to register this stirng to PDO.
        $have_status = False;
        $have_gender = False;
        $have_max_age = False;
        
        if ($status == '-'){
            $sql .= " status in ('P', 'A')";
            
        }
        else{
            $have_status = True;
            $sql .= " status = :status";
        }
        if ($gender == 'M' or $gender == 'F'){
            $sql .= " AND gender = :gender";
            $have_gender = True;
        }
        if ($max_age != ''){
            $sql .= " AND age<=:max_age";
            $have_max_age = True;
        }
        $stmt = $pdo->prepare($sql); //PDOStatement object
        if ($have_gender){
            $stmt ->bindParam(':gender', $gender, PDO:: PARAM_STR);
        }
        if ($have_status){
            $stmt ->bindParam(':status', $status, PDO:: PARAM_STR);
        }
        if ($have_max_age){
            $stmt ->bindParam(':max_age', $max_age, PDO:: PARAM_INT);
        }
        
        
        

        //STEP 3  execute the SQL statement
        $stmt -> execute();//Run SQL Statement  
        $stmt -> setFetchMode(PDO:: FETCH_NUM); //Each row retrieved as Indexed array.

        //STEP 4 Retrive Data
        $cats = []; //Indexed Array of Cat objects
        while($row = $stmt -> fetch()){ //fetch the current row curser is pointing
        

            //Retrieve tis row's columns
            //name, age, gender, stats
            $cat = new Cat(
                            $row[0],
                            $row[1],
                            $row[2],
                            $row[3]);

            //Convert this into a new cat object
            //Insert this new cat object inot cats
            $cats[] = $cat;
        }; 

        //Optional STEP 5 on clearing resources
        $stmt = null;// clear resources
        $pdo = null;

        //STEP 6 Return an Indexed array of cat object
        return $cats;
    }

    public function isCatFound($name) {

        // YOUR CODE GOES HERE
        //STEP 1 Connect to mysql schema animals
        $connectionmanager = new ConnectionManager();
        $pdo = $connectionmanager->connect(); //PDO Object

        //STEP 2 formulate sql statement
        $sql =  "SELECT * FROM cat WHERE name = :name"; //Current just string, need to register this stirng to PDO.
        $stmt = $pdo->prepare($sql); //PDOStatement object
        $stmt ->bindParam(':name', $name, PDO:: PARAM_STR);

        //STEP 3  execute the SQL statement
        $stmt -> execute();//Run SQL Statement  
        $stmt -> setFetchMode(PDO:: FETCH_NUM); //Each row retrieved as Indexed array.

        //STEP 4 Retrive Data
        $cats = []; //Indexed Array of Cat objects
        while($row = $stmt -> fetch()){ //fetch the current row curser is pointing
        

            //Retrieve tis row's columns
            //name, age, gender, stats
            $cat = new Cat(
                            $row[0],
                            $row[1],
                            $row[2],
                            $row[3]);

            //Convert this into a new cat object
            //Insert this new cat object inot cats
            $cats[] = $cat;
        }; 

        //Optional STEP 5 on clearing resources
        $stmt = null;// clear resources
        $pdo = null;

        //STEP 6 Return an Indexed array of cat object
        return $cats;
    }

    public function add($name, $age, $gender) {
        $status = 'A'; //New cat default status 'A'
        // YOUR CODE GOES HERE
        //STEP 1 Connect to mysql schema animals
        $connectionmanager = new ConnectionManager();
        $pdo = $connectionmanager->connect(); //PDO Object

        //STEP 2 formulate sql statement
        $sql =  "INSERT INTO CAT (name, age, gender, status)
                VALUES (:name, :age, :gender, :status)"; //Current just string, need to register this stirng to PDO.
        $stmt = $pdo->prepare($sql); //PDOStatement object
        $stmt ->bindParam(':name', $name, PDO:: PARAM_STR);
        $stmt ->bindParam(':age', $age, PDO:: PARAM_INT);
        $stmt ->bindParam(':gender', $gender, PDO:: PARAM_STR);
        $stmt ->bindParam(':status', $status, PDO:: PARAM_STR);

        $isOk = $stmt -> execute();

        $stmt = null;
        $pdo = null;

        return $isOk;
    }
    public function delete($name) {
        // YOUR CODE GOES HERE
        //STEP 1 Connect to mysql schema animals
        $connectionmanager = new ConnectionManager();
        $pdo = $connectionmanager->connect(); //PDO Object

        //STEP 2 formulate sql statement
        $sql =  "DELETE FROM cat WHERE name = :name"; //Current just string, need to register this stirng to PDO.
        $stmt = $pdo->prepare($sql); //PDOStatement object
        $stmt ->bindParam(':name', $name, PDO:: PARAM_STR);


        $isOk = $stmt -> execute();

        $stmt = null;
        $pdo = null;

        return $isOk;
    }
}
