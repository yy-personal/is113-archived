<?php

// $str = "Tomato Potato";
// $search = "Potato";

// $pos = strpos($str,$search);
// var_dump($pos);
// //C:\wamp64\www\is113\week5\foo.php:8:int 7

// $str = "Tomato Potato";
// $search = "potato";

// var_dump(strtolower($str));

// $pos = strpos($str,$search);
// var_dump($pos);
//C:\wamp64\www\is113\week5\foo.php:13:boolean false
$str = "Tomato Potato";
$search = "anything";

//How to differentiate
//1) item is legit found in Pos 0
//2) Item is NOT found, get Boolean False
//!== is comparing between data types

if(strpos($str, $search)!==FALSE){
    echo "$search food in $str";
}
else{
    echo "$search NOT found in $str";
}

echo '<hr>';

$num1 = 12345;
$num2 = '12345';

var_dump(
    ($num1 == $num2)
);

echo '<hr>';

$str = "Having Data  Mgmt  Midterm At Four";
var_dump(
    explode(" ", $str)
    //combining array together, we can use implode function.
);

var_dump(
    preg_split("/\s+/", $str)
    //plus sign denotes any number of white spaces
    //the "\ \" are used specifically for this function.
);

echo '<hr>';

$var1 = "hello"; // string
$var2 = "12.345"; //numeric string
$var3 = 12.345; //numeric float

var_dump(is_numeric($var1));
var_dump(is_numeric($var2));
var_dump(is_numeric($var3));
echo '<hr>';

$var1 = 123;
$var2 = 12.3;
$var3 = "123";
$var4 = -1;
$var5 = "-1";
var_dump(is_int($var1));
var_dump(is_int($var2));
var_dump(is_int($var3));
var_dump(is_int($var4));
var_dump(is_int($var5));

echo '<hr>';
//ctype_digit, check for numeric characters
//see if user input is a Positive Integer
var_dump(ctype_digit($var1));
var_dump(ctype_digit($var2));
var_dump(ctype_digit($var3));
var_dump(ctype_digit($var4));
var_dump(ctype_digit($var5));

echo '<hr>';

$pets=[
    'filthy',
    'dirty',
    'needy'
];

$search = 'dirty';

var_dump(
    in_array($search, $pets)
);

echo '<hr>';

$friends=[
    'Rachel'=> 'Bimbo',
    'Monica'=> 'Extreme OCD',
    'Phoebe'=> 'Smelly Cat'
];

$search = 'Monica';

var_dump(
    in_array($search, $friends)
);
var_dump(
    array_key_exists("Rachel", $friends)
);
var_dump(
    isset ($friends[$search])
);

echo '<hr>';

// $age = $_GET['age'] // it is a String
$age = '0';

if (strlen($age)==0){
    echo "Input age please!";
}
else{
    echo "You keyed in age $age";
}
//or using empty, 0 is considered as an empty value
if (empty($age)){
    echo "Input age please!";
}
else{
    echo "You keyed in age $age";
}
//best
if ($age == ""){
    echo "Input age please!";
}
else{
    echo "You keyed in age $age";
}

echo '<hr>';

$name = "   Lance Fu  ";
trim($name);
ltrim($name);
rtrim($name);
?>