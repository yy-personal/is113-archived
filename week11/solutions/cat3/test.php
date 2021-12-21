<?php

require_once 'CatDAO.php';

$dao = new CatDAO();

// Test Case 1
$status = 'A';
$gender = 'F';
$cats = $dao->getCatsFilter($status, $gender);
var_dump($cats);

// Test Case 2
$status = 'P';
$gender = 'F';
$cats = $dao->getCatsFilter($status, $gender);
var_dump($cats);


?>