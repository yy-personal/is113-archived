<?php

// Create a script to construct the following pattern, using nested for loop.

// Complete this function
function create_shape($num) {
    $shape_array = [];
    
    // YOUR CODE GOES HERE
    for($i=1; $i<$num+1;$i++){
        array_push($shape_array,str_repeat("*", $i));
    }
    return $shape_array;
}

/* Example

Given Form Input 5, below code must print:

*  
* *  
* * *  
* * * *  
* * * * *  

*/

$num = $_GET['num'];
$arr = create_shape($num);

foreach($arr as $item) {
    echo "$item<br>";
}

?>