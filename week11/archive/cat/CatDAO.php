<?php
##Make car class with method and certain properties
require_once 'Cat.php';
require_once 'ConnectionManager.php';

class CatDAO {
    
    private $cats; // Indexed Array of Cat objects

    // Constructor
    // Pre-populate static data
    public function __construct() {


    }


    // Whoever needs $cats, call this Getter method
    public function getCats() {

        // YOUR CODE GOES HERE
        //STEP 1 Connect to mysql schema animals
        $connectionmanager = new ConnectionManager();
        $pdo = $connectionmanager->connect(); //PDO Object

        //STEP 2 formulate sql statement
        $sql ="SELECT * FROM cat"; //Current just string, need to register this stirng to PDO.
        var_dump($sql);
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
        $start = null;// clear resources
        $pdo = null;

        //STEP 6 Return an Indexed array of cat object
        return $cats;
    }

    // Returns an Indexed Array of cats with a given 'status'
    // $status ('P' or 'A')
    public function getCatsByStatus($status) {
        $return_array = [];
        
        // YOUR CODE GOES HERE
        foreach($this->cats as $cat_info){
            //IF catobj status = $status
            //Retrieve cat status
            if($cat_info->getStatus() == $status ) {
                $return_array [] = $cat_info;
            }
            
        }
    
        return $return_array;
    }
    //Return an Indexed Array of cats whose age >= $age
    public function getCatsbyAge($age){
        //STEP 1 Connect to mysql schema animals
        $connectionmanager = new ConnectionManager();
        $pdo = $connectionmanager->connect(); //PDO Object

        //STEP 2 formulate sql statement
        $sql ="SELECT * FROM cat where age>=:age"; //Current just string, need to register this stirng to PDO.
        var_dump($sql);
        $stmt = $pdo->prepare($sql); //PDOStatement object
        $stmt -> bindParam(":age", $age, PDO::PARAM_INT); //cannot be directly substitute, to bind age into int only so user can only input int.
        // $stmt -> bindParam(":status", $status, PDO::PARAM_STR);

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
                            $row[0],
                            $row[1],
                            $row[2],
                            $row[3]);

            //Convert this into a new cat object
            //Insert this new cat object inot cats
            $cats[] = $cat;
        }; 

        //Optional STEP 5 on clearing resources
        $start = null;// clear resources
        $pdo = null;

        //STEP 6 Return an Indexed array of cat object
        return $cats;
    }

    // Returns an Indexed Array of cats with a given 'gender'
    // $gender ('M' or 'F')
    public function getCatsByGender($gender) {
        $return_array = [];

        // YOUR CODE GOES HERE

        foreach($this->cats as $cat_info){
            //IF catobj status = $status
            //Retrieve cat status
            if($cat_info->getGender() == $gender ) {
                $return_array [] = $cat_info;
            }
            
        }
        return $return_array;
    }

    // Returns an Indexed Array of cats with:
    //    a given $gender ('M' or 'F')
    //    AND
    //    a given $status ('P' or 'A')
    public function getCatsByGenderStatus($gender, $status) {
        $return_array = [];

        // YOUR CODE GOES HERE
        foreach($this->cats as $cat_info){
            //IF catobj status = $status
            //Retrieve cat status
            if($cat_info->getGender() == $gender && $cat_info->getStatus() == $status) {
                $return_array [] = $cat_info;
            }
            
        }
        return $return_array;
    }
    // public function updateStatus($name, $status)
    // {
    //     //STEP 1 Connect to mysql schema animals
    //     $connectionmanager = new ConnectionManager();
    //     $pdo = $connectionmanager->connect(); //PDO Object

    //     //STEP 2 formulate sql statement
    //     $sql ="update cat set status = :status where name>=:name"; //Current just string, need to register this stirng to PDO.
    //     var_dump($sql);
    //     $stmt = $pdo->prepare($sql); //PDOStatement object
    //     $stmt -> bindParam(":status", $status, PDO::PARAM_STR); //cannot be directly substitute, to bind age into int only so user can only input int.
    //     $stmt -> bindParam(":name", $name, PDO::PARAM_STR);

    //     //STEP 3  execute the SQL statement
    //     $stmt -> execute();//Run SQL Statement  
    //     // $stmt -> setFetchMode(PDO:: FETCH_NUM); //Each row retrieved as Indexed array.
        
 
    //     //Optional STEP 5 on clearing resources
    //     $start = null;// clear resources
    //     $pdo = null;

    //     //STEP 6 Return an Indexed array of cat object
    //     return $isOK;
    // }
}
