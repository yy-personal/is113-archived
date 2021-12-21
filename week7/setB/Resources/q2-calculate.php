<?php
/* 
    Name:  
    Email: 
*/

function generateRandomSets($quantity) {
    $num_numbers = 3; // generate 3 random integers
    $result = [];
    /*
     $result is an Array of Arrays.
     A sample $result array looks like this
     with parameter $quantity of 3 (user input):

     [
         [1, 5, 3],
         [2, 0, 9],
         [4, 8, 4]
     ]
    */
    
    // Part A
    // YOUR CODE GOES HERE
    
    return $result;
}

function calculate($random_sets, $lucky_number) {
    $result = [];
    $num_numbers = 3; // each set consists of 3 randomly generated integers

    /*
     $results is an Array.
     A sample $result array looks like this
     (given that $random_sets contain 4 sets of numbers)

     [
         0,
         1,
         0,
         2
     ]

     It means:
        - First number set had zero match.
        - Second number set had ONE match.
        - Third number set had zero match.
        - Fourth number set had TWO matches.

    */

    // Part B
    // YOUR CODE GOES HERE
    
    return $result;
}

// Form Processing
// YOUR CODE GOES HERE



// Generate # of sets (each set contains 3 numbers)
$random_sets = generateRandomSets($quantity); // DO NOT MODIFY THIS LINE

// Check if lucky number is found
$result = calculate($random_sets, $lucky_number); // DO NOT MODIFY THIS LINE

?>
<!DOCTYPE html>
<html>
<body>

</body>
</html>
