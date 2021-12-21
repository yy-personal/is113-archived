<?php

$people = [
    "trump"    => 'Donald Trump',
    "clinton"  => 'Hillary Clinton',
    "kim"      => 'Kim Jong Un',
    "moon"     => 'Moon Jae In',
    "putin"    => 'Vladimir Putin'
];

$msg = '';
$user_people = [];
$board_people = [];
if( isset($_POST['play']) ) {
    if( !isset($_POST['user_people']) ) {
        $msg = "You didn't select anyone! Select at least THREE (3) people!";
    }
    else {
        $user_people = $_POST['user_people'];
        if( count($user_people) < 3 )
            $msg = "Select at least THREE (3) people!";
        else
            $board_people = $user_people;
    }
}

function findDiagonal($n_by_n_board) {
    $num_wins = []; // Array with 2 items, each item is True or False
    /*
        (0, 0)
        (1, 1)
        (2, 2)
        (3, 3)

        (0, 3)
        (1, 2)
        (2, 1)
        (3, 0)
    */

    $num_cells = count($n_by_n_board);
    $left_to_right = [];
    $right_to_left = [];
    
    for($i = 0; $i < $num_cells; $i++) {
        $left_to_right[] = $n_by_n_board[$i][$i];
    }

    for($i = 0, $j = $num_cells - 1; $i < $num_cells && $j >= 0; $i++, $j--) {
        $right_to_left[] = $n_by_n_board[$i][$j];
    }

    // Left-to-Right Dianogal (True/False)
    if( count(array_unique($left_to_right)) == 1 )
        $num_wins[] = True;
    else
        $num_wins[] = False;

    // Right-to-Left Dianogal (True/False)
    if( count(array_unique($right_to_left)) == 1 )
        $num_wins[] = True;
    else
        $num_wins[] = False;

    return $num_wins;
}

?>
<!DOCTYPE html>
<html>
<body>
    <form method='post' action='q3.php'>
        <?php
            if( $msg != '' ) {
                echo "<h1>$msg</h1>";
            }
        ?>
        <table border='1'>
            <tr>
                <th>Person</th>
            </tr>
        <?php
            foreach($people as $key=>$value) {
                $checked = '';
                if( in_array($key, $user_people) )
                    $checked = 'checked';
                echo "
                    <tr>
                        <td>
                            <input type='checkbox' name='user_people[]' value='$key' $checked>$value
                        </td>
                    </tr>";
            }
        ?>
            <tr>
                <td>
                    <input type='submit' name='play'>
                </td>
            </tr>
        </table>
        
        <?php
            if( count($board_people) > 0 ) {
                echo '<hr>';

                // Generate board
                $num_cells = count($board_people);
                $n_by_n_board = [];
                for($i = 0; $i < $num_cells; $i++) {
                    $board = [];
                    for($j = 0; $j < $num_cells; $j++) {
                        $board[] = $board_people[rand(0, $num_cells - 1)];
                    }
                    $n_by_n_board[] = $board;
                }

                // Display board
                echo "
                    <table border='1'>
                ";
                for($i = 0; $i < $num_cells; $i++) {
                    echo '<tr>';

                    for($j = 0; $j < $num_cells; $j++) {
                        echo "
                            <td>
                                <img src='{$n_by_n_board[$i][$j]}.jpg'>
                            </td>
                        ";
                    }

                    echo '</tr>';
                }
                echo '</table>';

                // Find out whether have diagonal
                $diagonal_result = findDiagonal($n_by_n_board);
                if( count($diagonal_result) == 2 ) {
                    if( $diagonal_result[0] ) {
                        echo "<h1>Top Left to Bottom Right Diagonal FOUND</h1>";
                    }
                    if( $diagonal_result[1] ) {
                        echo "<h1>Top Right to Bottom Left Diagonal FOUND</h1>";
                    }
                }
            }
        ?>

    </form>
</body>
</html>