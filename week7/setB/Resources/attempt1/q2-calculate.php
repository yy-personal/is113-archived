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
    for($i=1; $i<=$quantity; $i++){
        $set = [];
        for ($x=1; $x<$num_numbers; $x++){
            $set[] = rand(0,9);
            // var_dump($set);
        }
        $result[] = $set;
    }
    var_dump($result);
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
    var_dump($random_sets);
    foreach($random_sets as $set_nums){
        $strike = 0;
        foreach($set_nums as $num){
            if($lucky_number == $num){
                $strike += 1;
            }
        }
        $result[] = $strike;
        
    }
    var_dump($result);
    return $result;
}

// Form Processing
// YOUR CODE GOES HERE
$lucky_number = $_POST['lucky_number'];
$bet_amount = $_POST['bet_amount'];
$quantity = $_POST['quantity'];
// Generate # of sets (each set contains 3 numbers)
$random_sets = generateRandomSets($quantity); // DO NOT MODIFY THIS LINE

// Check if lucky number is found
$result = calculate($random_sets, $lucky_number); // DO NOT MODIFY THIS LINE

?>
<!DOCTYPE html>
<html>
<body>
<?php
echo "<h3>Lucky Number: $lucky_number</h3>";
echo "<h3>Bet Amount: $bet_amount</h3>";
?>

<table border="1">
<tr>
        <th>Number Set</th>
        <th>Numeber of Matches</th>
        <th>Winning Amount</th>

</tr>
<?php
$total = 0;
    for($i=0; $i<$quantity; $i++){
        $set = implode(',', $random_sets[$i]);
        $winning = $result[$i]*$bet_amount;
        $total += $winning;
        echo
        "
        <tr>
            <td>
                $set
            </td>
            <td>
                $result[$i]
            </td>
            <td>
                $winning

            </td>
            
        </tr>
        ";
        
    }
    echo
        "
        <tr>
            <td colspan='2'>
                Total Winning Amount
            </td>
            <td>
                $total
            </td>
        </tr>
        ";
?>

</table>

</body>
</html>
