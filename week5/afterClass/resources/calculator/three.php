<?php

function calculate2($n1, $n2, $opr) {
    // YOUR CODE GOES HERE
    // COPY YOUR CODE FROM Part A (two.php)
}

function calculate3($n1, $n2, $n3, $opr1, $opr2) {
    // PART C
    // YOUR CODE GOES HERE
    $result = '';
    return $result;
}

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$num3 = $_POST['num3'];
$operator1 = $_POST['operator1'];
$operator2 = $_POST['operator2'];

$result = calculate3($num1, $num2, $num3, $operator1, $operator2);

?>
<html>
<body>
<h1>Result: <?= $result; ?></h1>
</body>
</html>