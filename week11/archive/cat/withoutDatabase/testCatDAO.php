<?php

require_once 'CatDAO.php';


$dao = new CatDAO();

// Test 0 (Get ALL cats)
echo '<hr>';
echo '<h1>All cats</h1>';
$cats = $dao->getCats(); // all cats
var_dump($cats);



// Test 1 (Filter by Status)
echo '<hr>';
echo "<h1>Filter by Status: status 'A'</h1>";
$cats = $dao->getCatsByStatus('A'); // all cats with status 'A'
var_dump($cats);

echo '<hr>';
echo "<h1>Filter by Status: status 'P'</h1>";
$cats = $dao->getCatsByStatus('P'); // all cats with status 'P'
var_dump($cats);



// Test 2 (Filter by Gender)
echo '<hr>';
echo "<h1>Filter by Gender: gender 'F'</h1>";
$cats = $dao->getCatsByGender('F'); // all cats with gender 'F'
var_dump($cats);

echo '<hr>';
echo "<h1>Filter by Gender: gender 'M'</h1>";
$cats = $dao->getCatsByGender('M'); // all cats with gender 'M'
var_dump($cats);


// Test 3 (Filter by Gender & Status)
echo '<hr>';
echo "<h1>Filter by Gender & Status: gender 'F' AND status 'A'</h1>";
$cats = $dao->getCatsByGenderStatus('F', 'A'); // all cats with gender 'F' AND status 'A'
var_dump($cats);

echo '<hr>';
echo "<h1>Filter by Gender & Status: gender 'F' AND status 'P'</h1>";
$cats = $dao->getCatsByGenderStatus('F', 'P'); // all cats with gender 'F' AND status 'P'
var_dump($cats);

echo '<hr>';
echo "<h1>Filter by Gender & Status: gender 'M' AND status 'A'</h1>";
$cats = $dao->getCatsByGenderStatus('M', 'A'); // all cats with gender 'M' AND status 'A'
var_dump($cats);

echo '<hr>';
echo "<h1>Filter by Gender & Status: gender 'M' AND status 'P'</h1>";
$cats = $dao->getCatsByGenderStatus('M', 'P'); // all cats with gender 'M' AND status 'P'
var_dump($cats);

?>