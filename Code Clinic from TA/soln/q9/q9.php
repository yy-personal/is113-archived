<?php

function generateRandomIndex($arrSize) {
    // Takes in an integer $i, which should be the 
    // Returns a random number between 0 (inclusive) and $i (exclusive)
    return rand(0,$arrSize-1);
}
$persons = [];
if (isset($_GET['persons'])) {
    $persons = $_GET['persons'];
}

//var_dump($_GET);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 9</title>
</head>
<body>
    <?php
        if (isset($_GET['submit_btn'])) {
            if (count($persons) < 2) {
                echo "<h1> Please select at least 2 people!</h1>";
            }
            else {
                $tableArr = [];
                echo "
                <table border='1'>";
                for ($row=0;$row<3;$row++) {
                    echo "
                    <tr>";
                    $rowArr = [];
                    for ($col=0;$col<3;$col++) {
                        $chosenIndex = generateRandomIndex(count($persons));
                        $image = $persons[$chosenIndex];
                        $rowArr[] = $image;
                        echo "
                        <td> <img src='images/$image.jpg'> </td>";
                    }
                    echo "
                    </tr>";
                    $tableArr[] = $rowArr;
                }
                echo "
                </table>";

                # Checking if there are any rows that match
                for ($i=0;$i<3;$i++) {
                    if ($tableArr[$i][0] == $tableArr[$i][1] && $tableArr[$i][0] == $tableArr[$i][2]) {
                        echo "<h1>There is a row of matching people!</h1>";
                        break;
                    }
                }
                # Checking if there are any columns that match
                for ($j=0;$j<3;$j++) {
                    if ($tableArr[0][$j] == $tableArr[1][$j] && $tableArr[0][$j] == $tableArr[2][$j]) {
                        echo "<h1>There is a column of matching people!</h1>";
                    }
                }
                # Checking for diagonal matches
                if ($tableArr[0][0] == $tableArr[1][1] && $tableArr[0][0] == $tableArr[2][2]) {
                    echo "<h1>There is a diagonal of matching people!</h1>";
                }
                elseif ($tableArr[0][2] == $tableArr[1][1] && $tableArr[0][2] == $tableArr[2][0]) {
                    echo "<h1>There is a diagonal of matching people!</h1>";
                }
            }
        }

    ?>
    <!-- Dont need to define because default is self-calling and GET -->
    <form>
        <table border='1'>
            <tr>
                <th>Name</th>
                <th>Choose</th>
            </tr>
            <?php

                # Array Data of the Selection Table
                $personArr = [
                    "Tayuya" => "tayuya",
                    "Sakon" => "sakon",
                    "Kidomaru" => "kidomaru",
                    "Jirobo" => "jirobo"
                ];



                # Creating the SelectionTable
                foreach ($personArr as $person => $value) {
                    echo "
                    <tr>
                        <td>$person</td>";


                    $checked = "";
                    foreach ($persons as $p) {
                        if ($value == $p) {
                            $checked = "checked";
                        }
                    }
                    echo "
                    <td> <input type='checkbox' name='persons[]' value='$value' $checked> </td>";


                }
            ?>
            <tr>
                <td></td>
                <td><input type='submit' name='submit_btn'></td>
            </tr>
        </table>
    </form>
    
</body>
</html>