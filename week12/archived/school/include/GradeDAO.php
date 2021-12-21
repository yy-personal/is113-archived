<?php

require_once 'ConnectionManager.php';
require_once 'Grade.php';

class GradeDAO {

    /*
    For the given user ($username), this method retrieves all of his/her grades
    from the 'grade' database table.

    INPUT
        $username (String)

    OUTPUT
        Return:
            An Indexed Array of Grade objects
    */
    public function getGrades($username) {
        $connectionmanager = new ConnectionManager();
        $pdo = $connectionmanager->connect(); //PDO Object

        //STEP 2 formulate sql statement
        $sql ="SELECT * FROM grade where username = :username"; //Current just string, need to register this stirng to PDO.
        $stmt = $pdo->prepare($sql); //PDOStatement object
        $stmt ->bindParam(':username', $username, PDO:: PARAM_STR);

        //STEP 3  execute the SQL statement
        $stmt -> execute();//Run SQL Statement  
        $stmt -> setFetchMode(PDO:: FETCH_ASSOC); //Convert the statement into associative array?
        // $stmt -> setFetchMode(PDO:: FETCH_NUM); //Each row retrieved as Indexed array.

        //STEP 4 Retrive Data
        $grades = []; //Indexed Array of Cat objects
        while($row = $stmt -> fetch()){ //fetch the current row curser is pointing
        

            //Retrieve tis row's columns
            //name, age, gender, stats
            $grade = new grade(
                    $row['username'],
                    $row['course_id'],
                    $row['course_title'],
                    $row['course_grade']);

            //Convert this into a new cat object
            //Insert this new cat object inot cats
            $grades[] = $grade;
        }; 

        //Optional STEP 5 on clearing resources
        $stmt = null;// clear resources
        $pdo = null;

        //STEP 6 Return an Indexed array of cat object
        return $grades;
        // YOUR CODE GOES HERE
    }
    
}

?>