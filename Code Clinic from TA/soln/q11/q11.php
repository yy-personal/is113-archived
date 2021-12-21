<?php
// Your code goes here
// Make use of the array given below:
$chefArr = ['malone' => 'ariel',
            'nickell' => 'ashley',
            'degeneres' => 'kristin'];

if (isset($_POST['chefs'])) {
    $fires = $_POST['chefs'];
    $last_name_fire = [];
    
    // Obtain the indexes of the chefs who have been fired.
    foreach ($chefArr as $last => $first) {
        foreach ($fires as $fire) {
            if ($fire == $first) {
                $last_name_fire[] = $last;
            }
        }
    }
    // Remove the chefs that have been fired.
    foreach ($last_name_fire as $last_name) {
        unset($chefArr[$last_name]);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 11</title>
</head>
<body>

    <h1>Which Chefs are you going to fire?</h1>

    <form method='post'>
        <table border='1'>
            <?php
                // Your code goes here too
                $no_chefs = count($chefArr);
                echo "<tr>
                    <th colspan='$no_chefs'>My Chefs</th>
                </tr>";
                echo "
                <tr>";

                // If there are no chefs, display "All fired"
                if ($no_chefs == 0) {
                    echo "<tr>
                        <td>OMG, all the chefs have been fired!</td>
                    </tr>";
                }
                else {
                    foreach ($chefArr as $last_name => $first_name) {
                        $name = $first_name . " " . $last_name;
                        echo "
                        <th>$name</th>";
                    }
                    echo "
                    </tr>";
                    echo "
                    <tr>";
                    foreach ($chefArr as $chef) {
                        echo "
                        <td><img src='img/$chef.png'></td>";
                    }
                    echo "
                    </tr>
                    <tr>";
                    foreach ($chefArr as $chef) {
                        echo "<td> <input type='checkbox' name='chefs[]' value='$chef'></td>";
                    }
                    echo "
                    </tr>";
                    echo "
                    <tr>
                        <td colspan='$no_chefs'> <input type='submit' value='FIRE!'> </td>
                    </tr>";
                }
                
            ?>
        </table>
    </form>
    
    
</body>
</html>