
<?php

function generateRandomSets($quantity) {
    $num_numbers = 3;
    $result = [];
    for($i = 0; $i < $quantity; $i++) {
        $arr = [];
        for($j = 0; $j < $num_numbers; $j++) {
            $rand = rand(0, 9);
            $arr[] = $rand;
        }
        $result[] = $arr;
    }
    return $result;
}

function calculate($random_sets, $lucky_number) {
    $result = [];
    $num_numbers = 3;
    foreach($random_sets as $set) {
        // $set is an Array of 3 numbers inside
        $num_matches = 0;
        for($i = 0; $i < $num_numbers; $i++) {
            if( $set[$i] == $lucky_number )
                $num_matches++;
        }
        $result[] = $num_matches;
    }
    return $result;
}

if (isset($_POST['check'])) {
    $quantity = $_POST['quantity'];
    $lucky_number = $_POST['lucky_number'];
    $bet_amount = $_POST['bet_amount'];

    // Generate # of sets (each set contains 3 numbers)
    $random_sets = generateRandomSets($quantity); // Array of Arrays

    // Check if lucky number is found
    $result = calculate($random_sets, $lucky_number);
}
?>
<!DOCTYPE html>
<html>
<body>
    <?php
        if( isset($result) ) {
            echo "<h3>Lucky Number: $lucky_number</h3>";
            echo "<h3>Bet Amount: $bet_amount</h3>";
            echo "
                <table border='1'>
                    <tr>
                        <th>Number Set</th>
                        <th>Number of Matches</th>
                        <th>Winning Amount</th>
                    </tr>
                ";
            $total = 0;
            $count = count($random_sets);
            for($i = 0; $i < $count; $i++) {
                $set = $random_sets[$i];
                $win_amount = $bet_amount * $result[$i];
                $total += $win_amount;
                echo "
                    <tr>
                        <td>$set[0], $set[1], $set[2]</td>
                        <td>$result[$i]</td>
                        <td>$win_amount</td>
                    </tr>
                ";
            }
            echo "
                    <tr>
                        <th align='right' colspan='2'>Total Winning Amount</th>
                        <th>$total</th>
                </table>";
        }
    ?>
</body>
</html>
