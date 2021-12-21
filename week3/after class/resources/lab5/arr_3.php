<?php

    /*
       write a function called count_numbers that takes in 
       a multidimensional array, say $numbers, 
       containing numbers and arrays that contain numbers. 
       It returns the count of numbers in the array $numbers.
       Note that your function has to cater to the possibility of 
       $numbers having an array of numbers.  
       You can assume that it is at the most a 2-dimensional array. 

    */

    //$numbers = [4, 6, [1,2], 10, [-1,-3]];
    $numbers = [4, 6, [1,2,3,4], 10, [-1,-3], [5,7,1,2]];

    echo "Count of numbers: " . count_numbers($numbers);
       
    

    function count_numbers($numbers) {
      // add your code here
    }

?>

