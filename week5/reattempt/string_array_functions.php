<?php

/*
Below, you will find some very useful string & array PHP functions.
You need to know how to use all these functions for your IS113-WAD1 lab tests and final exam.

The best way to learn new functions is:

1) Check out the PHP Manual
- It has examples that you can try

2) Try the code on your own 
- Try different input values & see what are the resulting output values
- Do not use the functions right away in complex/lengthy Exercises
- Try simple code segments to get familiarized with the function's input & output in a separate PHP file first

*/


echo '<pre>';

/* For MAMP users, need to <pre> ... </pre> so that var_dump outputs vertically

Usually -
Text in a <pre> element is displayed in a fixed-width font (usually Courier)
It preserves both spaces and line breaks.

<pre>

Blah ...
   Blah ...
      Blach ...
      
</pre>

The above will display in the browser's main body (NOT in View Source):

-------- Browser Main Body (what the normal user sees) --------

Blah ...
   Blah ...
      Blach ...

---------------------------------------------------------------

*/



# strtolower(), strtoupper()
$str = 'Chris Hemsworth';

var_dump(
    strtolower($str)
);

var_dump(
    strtoupper($str)
);


echo '<hr>';




# strpos() --> Returns an Integer (position index)
$str = 'Chris Hemsworth';
$search1 = 'hemsworth'; # Case sensitive
$search2 = 'Hemsworth'; # Case sensitive
var_dump(
    strpos($str, $search1)
);

var_dump(
    strpos($str, $search2)
);

$pos = strpos($str, $search2);
if( $pos >= 0 )
    echo "<br>
        I found $search1 in $str at position $pos
    ";

echo '<hr>';




# strpos()
$str = 'Chris Hemsworth';
$search = 'Chris';
var_dump(
    strpos($str, $search)
);

$pos = strpos($str, $search);
if( $pos >= 0 )
    echo "<br>
        I found $search in $str at position $pos
    ";


$search = 'Gigi';
var_dump(
    strpos($str, $search)
);

$pos = strpos($str, $search);
if( $pos >= 0 )
    echo "<br>
        I found $search in $str at position $pos
    ";
// Returns FALSE (Integer 0)


echo "
    Correct way to check if a substring is found in a string is to use !== FALSE";

$pos = strpos($str, $search);

if( $pos !== FALSE )
    echo "<br>
        I found $search in $str at position $pos
    ";
else
    echo "<br>
        I could NOT find $search in $str
    ";


echo '<hr>';




# str_replace() --> Case Sensitive
$str = 'Hello Ugly Hello Handsome';
$new_str = str_replace('Hello', 'Bye', $str);
echo "<br>
    $new_str
";


echo '<hr>';




# explode() --> splits a String into an Indexed Array, given a delimiter
$str = 'Hello Ugly Handsome Men Women';
$some_array = explode(" ", $str);
var_dump($some_array);


$str = 'Hello Ugly   Handsome   Men  Women';
$some_array = explode(" ", $str);
var_dump($some_array);


$str = 'Hello Ugly   Handsome   Men  Women';
$some_array = preg_split('/\s+/', $str);
var_dump($some_array);


echo '<hr>';




# is_numeric()  # Finds whether a variable is a number or a numeric string
$var1 = 'hello';  # False
$var2 = "12.375"; # True
$var3 = 12.375;   # True


if( is_numeric($var1) )
    echo "
        $var1 is numeric";
else
    echo "
        $var1 is non-numeric";


if( is_numeric($var2) )
    echo "
        $var2 is numeric";
else
    echo "
        $var2 is non-numeric";


    
if( is_numeric($var3) )
    echo "
        $var3 is numeric";
else
    echo "
        $var3 is non-numeric";    


echo '<hr>';


/*
┌──────────┬───────────┬────────────────┐
│          │  is_int:  │  ctype_digit:  │
├──────────┼───────────┼────────────────┤
│ 123      │  true     │  false         │
├──────────┼───────────┼────────────────┤
│ 12.3     │  false    │  false         │
├──────────┼───────────┼────────────────┤
│ "123"    │  false    │  true          │
├──────────┼───────────┼────────────────┤
│ "12.3"   │  false    │  false         │
├──────────┼───────────┼────────────────┤
│ "-1"     │  false    │  false         │
├──────────┼───────────┼────────────────┤
│ -1       │  true     │  false         │
└──────────┴───────────┴────────────────┘
*/


# is_int() to check if variable's data TYPE is INTEGER
$var1 = 123; # True, it is of INTEGER Type
$var2 = 12.3; # False, it is of FLOAT type
$var3 = "123"; # False, it is of STRING type
$var4 = -1; # True, it is of INTEGER type
$var5 = "-1"; # False, it is of FLOAT type




# ctype_digit() to check if INTEGER --> ONLY takes STRING as input
$var1 = "12.375"; # False
$var2 = "12"; # True
$var3 = "-123"; # False

if( ctype_digit($var1) )
    echo "
        $var1 is Integer";
else
    echo "
        $var1 is non-Integer";


if( ctype_digit($var2) )
    echo "
        $var2 is Integer";
else
    echo "
        $var2 is non-Integer";


if( ctype_digit($var3) )
    echo "
        $var2 is Integer";
else
    echo "
        $var2 is non-Integer";


echo '<hr>';




# in_array()
$friends = [ 'rachel', 'chandler', 'monica', 'ross', 'joey', 'phoebe' ];
$search = 'rachel';

if( in_array($search, $friends) )
    echo "
        I found $search in the Indexed Array
    ";



echo '<hr>';




# array_key_exists()
$friends = [
            'rachel' => 'bimbo', 
            'chandler' => 'dancer', 
            'monica' => 'ocd', 
            'ross' => 'dinosaur', 
            'joey' => 'how ya doing', 
            'phoebe' => 'smelly cat'
        ];

$search = 'rachel';

if( array_key_exists($search, $friends) )
    echo "
        I found the key $search in the Associative Array.<br>
        Her characteristic is $friends[$search]
    ";



echo '<hr>';




# isset() - Example 1
var_dump(
    isset($somebody)
);

$somebody = 'Harry Styles';

var_dump(
    isset($somebody)
);



echo '<hr>';



# isset() - Example 2
$pets = [
    'dog' => 'bow wow',
    'cat' => 'meow meow',
    'cow' => 'mooooooo' ];

$hamster = $pets['hamster'];

var_dump(
    isset($pets['hamster'])
);


$dog = $pets['dog'];


var_dump(
    isset($pets['dog'])
);


echo '<hr>';




# Can I not use isset()? - Workaround
# isset() WILL be tested in lab tests & final in IS113 WAD1 - so please do know how to use isset()
$hamster = $pets['hamster'] ?? 'Cannot Find';

var_dump(
    $hamster
);


echo '<hr>';



# How to check if a string is an empty string?
# empty() vs. != ''
$howdy = '';

if( $howdy == '' )
    echo "<br>
    This is an empty string
    ";
else
    echo "<br>
    This is NOT an empty string
    ";

if( empty($howdy) )
    echo "<br>
    This is an empty string
    ";
else
    echo "<br>
    This is NOT an empty string
    ";

echo '<hr>';

// Be careful when use empty() function !!!
$howdy = '0';

if( $howdy == '' )
    echo "<br>
    This is an empty string
    ";
else
    echo "<br>
    This is NOT an empty string
    ";

if( empty($howdy) )
    echo "<br>
    This is an empty string
    ";
else
    echo "<br>
    This is NOT an empty string
    ";

// Oh no!!!
// If you have a form input field where the value ZERO (0) is a VALID INPUT
// empty() will say that it is an EMPTY string



echo '<hr>';



# trim(), rtrim(), ltrim() --> removing whitespaces
$howdy = '    Hello World        ';

var_dump(
    $howdy
);

var_dump(
    rtrim($howdy)
);

var_dump(
    ltrim($howdy)
);

var_dump(
    trim($howdy)
);



echo '<hr>';



# Your own custom function

// Wanna check if a number is an even number
$number = 9;

if( ($number % 2) == 0 )
    echo "
        $number is an even number!";
else
    echo "
        $number is an odd number!";

echo '<hr>';

// OKAY I checked for 1 number
// How about I have to do this same check for an entire array?
$number_array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
foreach($number_array as $number)
{
    if( ($number % 2) == 0 )
        echo "
            $number is an even number!";
    else
        echo "
            $number is an odd number!";
}




// OKAY this works
// Another way to organize your code is -
// If you see a piece of logic repeating (such as above)
// You can separate the logic into a custom "function"
// And call that function
// Wath this

// Custom function
function is_even_number($pNumber)
{
    if( ($pNumber % 2) == 0 )
        return "$pNumber is an even number!";
    else
        return "$pNumber is an odd number!";
}




// Now, far down below in my PHP
// I wanna check for even number
$number_array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
foreach($number_array as $number)
{
    echo "
    " . is_even_number($number);
}


exit;


echo '<hr>';




// OR, you can make your function simply return TRUE or FALSE
// Custom function
function is_even_number2($pNumber)
{
    if( ($pNumber % 2) == 0 )
        return True;
    return False;
}


// Now, far down below in my PHP
// I wanna check for even number
$number_array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
foreach($number_array as $number)
{
    if( is_even_number2($number) )
    {
        echo "
            $number is an even number";
        // proceed with the rest of the code...
    }
}




echo '</pre>';
?>