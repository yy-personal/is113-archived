<?php

// YOUR CODE GOES HERE

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$opr = $_GET['operator'];

$value = 0;
if ($opr == "+") {
    $value = $num1 + $num2;
}
else if ($opr == "-") {
    $value = $num1 - $num2;
}
else if ($opr == "*") {
    $value = $num1 * $num2;
}
else {
    $value = $num1 / $num2;
}

echo "<h1> The calculated value is $value.</h1>";


?>