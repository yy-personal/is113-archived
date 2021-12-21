<?php


require_once 'Course.php';

$courses = [
    new Course("Apple LEE", "IDIS001", "Analytical Skills", "TUE", "1330", 1), 
    new Course("Apple LEE", "IS112", "Data Management", "TUE", "830", 2), 
    new Course("Apple LEE", "IS113", "Web Application Development", "THU", "1530", 2), 
    new Course("Apple LEE", "WRIT001", "Programme in Writing and Reasoning", "MON", "1000", 1), 
    new Course("Apple LEE", "WRIT001", "Programme in Writing and Reasoning", "WED", "1000", 1), 
    new Course("Bruce LOH", "OBHR001", "Leadership and Team Building", "WED", "1200", 2), 
    new Course("Bruce LOH", "IS112", "Data Management", "TUE", "830", 2), 
    new Course("Bruce LOH", "IS113", "Web Application Development", "THU", "1530", 2), 
    new Course("Bruce LOH", "WRIT001", "Programme in Writing and Reasoning", "FRI", "1000", 1), 
    new Course("Bruce LOH", "WRIT001", "Programme in Writing and Reasoning", "WED", "1000", 1), 
    new Course("Colin TEO", "CS110", "Great Ideas in Computer Science", "TUE", "830", 2), 
    new Course("Colin TEO", "CS111", "Programming Methodology", "TUE", "1200", 2), 
    new Course("Colin TEO", "CS112", "Database Systems", "THU", "1530", 2), 
    new Course("Colin TEO", "CS113", "Object Oriented Programming", "MON", "830", 2)
];

foreach ($courses as $course) {
    $dsn = "mysql:host=localhost;dbname=wadworkshop2021;port=3306";
    $pdo = new PDO($dsn, "root", ""); 
    $sql = 'INSERT INTO timetable(`studentName`,  `courseCode`,  `courseDesc`,  `weekOfDay`,  `startTime`,  `numUnits`) VALUES (:studentName, :courseCode, :courseDesc, :weekOfDay, :startTime, :numUnits)'; 
    $stmt = $pdo->prepare($sql); 
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
    $stmt->bindParam(':studentName', $course->studentName, PDO::PARAM_STR);
    $stmt->bindParam(':courseCode', $course->courseCode, PDO::PARAM_STR);
    $stmt->bindParam(':courseDesc', $course->courseDesc, PDO::PARAM_STR);
    $stmt->bindParam(':weekOfDay', $course->weekOfDay, PDO::PARAM_STR);
    $stmt->bindParam(':startTime', $course->startTime, PDO::PARAM_STR);
    $stmt->bindParam(':numUnits', $course->numUnits, PDO::PARAM_INT);
    $isInserted = $stmt->execute();

    if($isInserted){
        echo "<h2>Thanks for registering $course->courseCode</h2>";
    }

    $stmt->closeCursor();
    $pdo = null;
}


?>