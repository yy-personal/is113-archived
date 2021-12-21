<?php

function generateRandomIndex($arrSize) {
    // Takes in an integer $arrSize, which is the size of the Array.
    // Returns a random number between 0 (inclusive) and $arrSize (exclusive)
    return rand(0,$arrSize-1);
}


// YOUR CODE GOES HERE 
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
        // YOUR CODE CAN ALSO GO HERE

    ?>
    <!-- Dont need to define because default is self-calling and GET -->
    <form>
        <table border='1'>
            <tr>
                <th>Name</th>
                <th>Choose</th>
            </tr>
            <?php
                // Your code goes here
            ?>
        </table>
    </form>
    
</body>
</html>