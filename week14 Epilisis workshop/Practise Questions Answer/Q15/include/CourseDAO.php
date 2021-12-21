<?php

require_once 'common.php';

class AccountDAO {

  // This method checks to see if an account with $username exists in the database 'account' table.
  // If it exists, it returns an Account object.
  // Else, it returns null.
  public function retrieve($student) {

    $sql = 'SELECT * FROM timetable where studentName = :studentName'; 

    $connMgr = new ConnectionManager();
    $conn = $connMgr->getConnection();

    $stmt = $conn->prepare($sql); 
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->bindParam(':studentName', $input, PDO::PARAM_STR);
    $stmt->execute();

    $timetable = [];

    while($row = $stmt->fetch()) {
        $timetable[] = Course($row['studentName'], $row['courseCode'], $row['courseDesc'], $row['weekOfDay'], $row['startTime'], $row['numUnit']);
    }

    $stmt = null;
    $conn = null;

    return $timetable;

  }

}
?>