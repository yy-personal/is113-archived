<?php

require_once 'CatDAO.php';

$dao = new CatDAO();


// Test 0 (Get ALL cats)
echo '<hr>';
echo '<h1>Fetch ALL cat rows - each as an Associative Array</h1>';
$cats = $dao->getCats(); // all cats
var_dump($cats);

echo '<hr>';
echo '<h1>Fetch ALL cat rows - each as an Indexed Array</h1>';
$cats = $dao->getCats2(); // all cats
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




// Test 4 (Filter by Status, Gender, Max Age)
echo '<hr>';
echo "<h1>Filter by Status & Gender & Max Age</h1>";
echo "<h2>status 'A' AND gender 'F' and max_age 8</h2>";
$status = 'A';
$gender = 'F';
$max_age = 8;
$cats = $dao->getCatsFilter($status, $gender, $max_age);
var_dump($cats);

echo '<hr>';
echo "<h1>Filter by Status & Gender & Max Age</h1>";
echo "<h2>status 'P' AND gender 'M' and max_age 10</h2>";
$status = 'P';
$gender = 'M';
$max_age = 10;
$cats = $dao->getCatsFilter($status, $gender, $max_age);
var_dump($cats);

echo '<hr>';
echo "<h1>Filter by Status & Gender & Max Age</h1>";
echo "<h2>status 'P' AND gender 'M' and max_age 5</h2>";
$status = 'P';
$gender = 'M';
$max_age = 5;
$cats = $dao->getCatsFilter($status, $gender, $max_age);
var_dump($cats);




// Test 5 - (Database Select - Find Cat by Name - Is he/she found?)
echo '<hr>';
echo "<h1>Find Cat by Name - Is he/she found?</h1>";
$name = 'Filthy';
if( $dao->isCatFound($name) ) {
    echo "<font color='blue'>
        Cat named <b>$name</b> exists in database!
        </font>";
}
else {
    echo "<font color='red'>
        Oh no! Cat named <b>$name</b> does NOT exist in database!
        </font>";
}

echo '<hr>';
echo "<h1>Find Cat by Name - Is he/she found?</h1>";
$name = 'Smarty';
if( $dao->isCatFound($name) ) {
    echo "<font color='blue'>
        Cat named <b>$name</b> exists in database!
        </font>";
}
else {
    echo "<font color='red'>
        Oh no! Cat named <b>$name</b> does NOT exist in database!
        </font>";
}




// Test 6 - (Database Select - Find Cat by Name - Get Cat object)
// echo '<hr>';
// echo "<h1>Find Cat by Name - Get Cat object</h1>";
// $name = 'Filthy';
// $cat = $dao->getCatByName($name);
// if( $cat ) {
//     echo "<font color='blue'>
//         Cat named <b>$name</b> exists in database!
//         </font>";
//     var_dump($cat);
// }
// else {
//     echo "<font color='red'>
//         Oh no! Cat named <b>$name</b> does NOT exist in database!
//         </font>";
// }

// echo '<hr>';
// echo "<h1>Find Cat by Name - Get Cat object</h1>";
// $name = 'Smarty';
// $cat = $dao->getCatByName($name);
// if( $cat ) {
//     echo "<font color='blue'>
//         Cat named <b>$name</b> exists in database!
//         </font>";
//     var_dump($cat);
// }
// else {
//     echo "<font color='red'>
//         Oh no! Cat named <b>$name</b> does NOT exist in database!
//         </font>";
// }



//================================================================================
// Below test cases will MANIPULATE "cat" MySQL DB table
// They are commented out for now.
// You can un-comment and run each test case at a time.
//================================================================================



// Test 7 - (Database Add)
// echo '<hr>';
// echo "<h1>Database Add</h1>";
// $name = 'Ugly';
// $age = 8;
// $gender = 'M';
// if( $dao->add($name, $age, $gender) ) {
//     echo "<font color='blue'>
//         Your cat $name has been added successfully!<br>
//         Let's see all the cats in the database!
//         </font>";
//     var_dump( $dao->getCats() );
// }
// else {
//     echo "<font color='red'>Oh no! Your cat couldn't be added!</font>";
// }

// echo '<hr>';
// echo "<h1>Database Add</h1>";
// $name = 'Angry';
// $age = 5;
// $gender = 'F';
// if( $dao->add($name, $age, $gender) ) {
//     echo "<font color='blue'>
//         Your cat $name has been added successfully!<br>
//         Let's see all the cats in the database!
//         </font>";
//     var_dump( $dao->getCats() );
// }
// else {
//     echo "<font color='red'>Oh no! Your cat couldn't be added!</font>";
// }



// Test 8 - (Database Delete)
echo '<hr>';
echo "<h1>Database Delete</h1>";
$name = 'Ugly';
if( $dao->delete($name) ) {
    echo "<font color='blue'>
        Your cat $name has been deleted successfully!
        </font>";
    var_dump( $dao->getCats() );
}
else {
    echo "<font color='red'>
            Oh no! Your cat $name couldn't be deleted!
        </font>";
}



// Test 9 - (Database Update - Update a specified cat's status)
// echo '<hr>';
// echo "<h1>Update a specified cat's status</h1>";
// $name = 'Dirty';
// $new_status = 'P';

// echo "<h3>Before Updating $name's status</h3>";
// var_dump( $dao->getCatByName($name) );

// if( $dao->updateStatus($name, $new_status) ) {
//     echo "<font color='blue'>
//         Cat $name's status changed to $new_status
//         </font>";
//     echo "<h3>After Updating $name's status</h3>";
//     var_dump( $dao->getCatByName($name) );
// }
// else {
//     echo "<font color='red'>
//         Cat $name's status could not be updated to $new_status
//         </font>";
// }



// Test 10 - (Database Update - Update a specified cat's details)
// echo '<hr>';
// echo "<h1>Update a specified cat's details</h1>";
// $name = 'Dirty';
// $age = 13;
// $gender = 'M';
// $new_status = 'P';

// echo "<h3>Before Updating $name's status</h3>";
// var_dump( $dao->getCatByName($name) );

// if( $dao->update($name, $age, $gender, $new_status) ) {
//     echo "<font color='blue'>
//         Cat $name's details have been updated!
//         </font>";
//     echo "<h3>After Updating $name's status</h3>";
//     var_dump( $dao->getCatByName($name) );
// }
// else {
//     echo "<font color='red'>
//         Cat $name's details could not be updated!
//         </font>";
// }


?>