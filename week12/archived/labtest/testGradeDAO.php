<?php

require_once 'include/GradeDAO.php';

$grade_dao = new GradeDAO();

// Test Case 1
$email = 'bubba@smu.edu.sg';
$grade = $grade_dao->retrieve($email);
echo '<hr>';
echo "<h1>Retrieve grade row for $email</h1>";
var_dump($grade);

// Test Case 2
$email = 'leandralee@smu.edu.sg';
$grade = $grade_dao->retrieve($email);
echo '<hr>';
echo "<h1>Retrieve grade row for $email</h1>";
var_dump($grade);

// Test Case 3
$email = 'gigi.teo@smu.edu.sg';
$grade = $grade_dao->retrieve($email);
echo '<hr>';
echo "<h1>Retrieve grade row for $email</h1>";
var_dump($grade);


?>