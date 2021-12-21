<?php

require_once 'ConnectionManager.php';
require_once 'Grade.php';

class GradeDAO {
    
    /*
    For the given email ($email), this method retrieves a matching row
    from the 'grade' database table where email == $email.

    INPUT
        $email (String)

    OUTPUT
        Return:
            A Grade object (if a match is found)
            null (otherwise)

    */
    public function retrieve($email) {

        // Step 1 - Connect to Database
        $connMgr = new ConnectionManager();
        $pdo = $connMgr->connect();

        // Step 2 - Prepare SQL
        $sql = "SELECT * 
                FROM grade 
                WHERE email = :email";

        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        
        // Step 3 - Execute SQL
        $return_grade = null;

        if( $stmt->execute() ) {
        
            // Step 4 - Retrieve Query Results
            if( $row = $stmt->fetch() ) {
                $return_grade = new Grade($row['email'], 
                                    $row['status'],
                                    $row['q1'],
                                    $row['q2'],
                                    $row['q3']
                    );
            }
        }
        
        // Step 5 - Clear Resources
        $stmt = null;
        $pdo = null;

        // Step 6 - Return a Grade object (or null)
        return $return_grade;
    }

    
    // FEEL FREE TO WRITE MORE DAO METHODS

}


?>