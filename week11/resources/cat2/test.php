<?php

require_once 'CatDAO.php';
$dao = new CatDAO();

// Test Cases

// Test 'A'
$cats = $dao->getCatsByStatus('A'); // all cats with status 'A'
var_dump($cats);

// Test 'P'
$cats = $dao->getCatsByStatus('P'); // all cats with status 'P'
var_dump($cats);

?>