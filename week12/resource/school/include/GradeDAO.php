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

        // YOUR CODE GOES HERE
        $connMgr = new ConnectionManager();
        $conn = $connMgr->connect();

        $sql = "SELECT * FROM grade where username = :username";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);

        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $isValid = False;
        $grades = [];
        while ($row = $stmt->fetch() ) {
            $grades[] = new grade( 
                    $row['username'], 
                    $row['course_id'], 
                    $row['course_title'], 
                    $row['course_grade'] 
                );
            }
        $stmt = null; 
        $conn = null;
        
        return $grades;
    
    }
}

?>