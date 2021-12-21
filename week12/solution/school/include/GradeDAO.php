<?php

require_once 'ConnectionManager.php';
require_once 'Grade.php';

class GradeDAO {

    public function getGrades($username) {

        // Step 1 - Connect to Database
        $connMgr = new ConnectionManager();
        $pdo = $connMgr->connect();

        // Step 2 - Prepare SQL
        $sql = "SELECT
                    username, course_id, course_title, course_grade
                FROM
                    grade 
                WHERE
                    username = :username
        ";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        
        // Step 3 - Execute SQL
        $grades = [];
        if( $stmt->execute() ) {

            // Step 4 - Retrieve Query Results
            while( $row = $stmt->fetch() ) {
                $grades[] = new Grade(
                    $row['username'],
                    $row['course_id'],
                    $row['course_title'],
                    $row['course_grade']
                );
            }
        }
        
        // Step 5 - Clear Resources
        $stmt = null;
        $pdo = null;

        // Step 6 - Return an Indexed Array of Grade objects
        return $grades;
    }
    
}

?>