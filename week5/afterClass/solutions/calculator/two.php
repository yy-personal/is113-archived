<?php

function calculate2($n1, $n2, $opr) {
    if( $opr == '+' )
        $result = $n1 + $n2;
    elseif( $opr == '-' )
        $result = $n1 - $n2;
    elseif( $opr == '*' )
        $result = $n1 * $n2;
    elseif( $opr == '/' )
        if( $n2 == 0 )
            $result = 'Undefined';
        else
            $result = $n1 / $n2;
    else
        $result = 'Unknown Operator';
    return $result;
}

$errors = [];
if( !isset($_POST['num1']) || $_POST['num1'] == '' )
    $errors[] = 'num1 is missing';
else {
    if( !is_numeric($_POST['num1']) )
        $errors[] = 'num1 is non-numeric';
}

if( !isset($_POST['num2']) || $_POST['num2'] == '' )
    $errors[] = 'num2 is missing';
else {
    if( !is_numeric($_POST['num2']) )
        $errors[] = 'num2 is non-numeric';
}

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operator = $_POST['operator'];

if( count($errors) == 0 )
    $result = calculate2($num1, $num2, $operator);

?>
<html>
<body>
<?php
    if( isset($result) )
        echo "<h1>$result</h1>";
    else {
        echo '<ul>';
        foreach($errors as $err) {
            echo "<li>$err</li>";
        }
        echo '</ul>';
    }
?>

</body>
</html>