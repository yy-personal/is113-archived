<?php

require_once 'CatDAO.php';


$dao = new CatDAO();

var_dump($dao);

// exit;

// Test 0 (Get ALL cats)
echo '<hr>';
echo '<h1>All cats</h1>';
$cats = $dao->getCats(); // all cats
var_dump($cats);
// exit;



// // Test 1 (Filter by Status)
// echo '<hr>';
// echo "<h1>Filter by Status: status 'A'</h1>";
// $cats = $dao->getCatsByStatus('A'); // all cats with status 'A'
// var_dump($cats);

// echo '<hr>';
// echo "<h1>Filter by Status: status 'P'</h1>";
// $cats = $dao->getCatsByStatus('P'); // all cats with status 'P'
// var_dump($cats);



// // Test 2 (Filter by Gender)
// echo '<hr>';
// echo "<h1>Filter by Gender: gender 'F'</h1>";
// $cats = $dao->getCatsByGender('F'); // all cats with gender 'F'
// var_dump($cats);

// echo '<hr>';
// echo "<h1>Filter by Gender: gender 'M'</h1>";
// $cats = $dao->getCatsByGender('M'); // all cats with gender 'M'
// var_dump($cats);


// // Test 3 (Filter by Gender & Status)
// echo '<hr>';
// echo "<h1>Filter by Gender & Status: gender 'F' AND status 'A'</h1>";
// $cats = $dao->getCatsByGenderStatus('F', 'A'); // all cats with gender 'F' AND status 'A'
// var_dump($cats);

// echo '<hr>';
// echo "<h1>Filter by Gender & Status: gender 'F' AND status 'P'</h1>";
// $cats = $dao->getCatsByGenderStatus('F', 'P'); // all cats with gender 'F' AND status 'P'
// var_dump($cats);

// echo '<hr>';
// echo "<h1>Filter by Gender & Status: gender 'M' AND status 'A'</h1>";
// $cats = $dao->getCatsByGenderStatus('M', 'A'); // all cats with gender 'M' AND status 'A'
// var_dump($cats);

// echo '<hr>';
// echo "<h1>Filter by Gender & Status: gender 'M' AND status 'P'</h1>";
// $cats = $dao->getCatsByGenderStatus('M', 'P'); // all cats with gender 'M' AND status 'P'
// var_dump($cats);
##TEst case 4
//input type = text name age
//assume user keyed in 6 in textbox

$age = '6 or 1=1'; //asume this from form submisson so is string.
$cats = $dao -> getCatsbyAge($age);
var_dump($cats);

//TEst case 5
//Update cat status
$name = 'Dirty';
$new_status = 'P';
$isok = ;
if($doa -> updateStatus($name, $new_status)){
    echo "$name's status changed to $new_status<br>";
}
else{
    echo "$name's status can't be changed";
}

?>