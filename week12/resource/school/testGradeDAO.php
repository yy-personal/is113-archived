<?php

require_once 'include/GradeDAO.php';

$dao = new GradeDAO();

// Test Case 1 - Get all grades
echo '<hr>';
$student_id = 'selena';
echo "<h1>Get all grades for $student_id</h1>";
var_dump( $dao->getGrades($student_id) );

echo '<hr>';
$student_id = 'justin';
echo "<h1>Get all grades for $student_id</h1>";
var_dump( $dao->getGrades($student_id) );

echo '<hr>';
$student_id = 'britney';
echo "<h1>Get all grades for $student_id</h1>";
var_dump( $dao->getGrades($student_id) );

echo '<hr>';
$student_id = 'zac';
echo "<h1>Get all grades for $student_id</h1>";
var_dump( $dao->getGrades($student_id) );

?>