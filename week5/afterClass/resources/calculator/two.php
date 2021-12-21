<?php

function calculate2($n1, $n2, $opr) {
    // PART A
    // YOUR CODE GOES HERE
    $result = '';

    return $result;
}

$errors = [];

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operator = $_POST['operator'];

$result = calculate2($num1, $num2, $operator);

?>
<html>
<body>
    
<?php
    // PART B
    // YOUR CODE GOES HERE
    // Use $errors[] Array to list form input validation errors (IF ANY)
?>

<h1><?= $result; ?></h1>

</body>
</html>