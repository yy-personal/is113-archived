<?php
/* 
    Name:  
    Email: 
*/
var_dump($_POST);
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$num3 = $_POST['num3'];
$divisor = $_POST['divisor'];

function is_divisible_by($num, $n){
    if ($num%$n==0){
        echo "$num is divisible by $n: YES";
    }
    else{
        echo "$num is divisible by $n: NO";
    }
}


echo "<ul>";
echo "<li>";
is_divisible_by($num1, $divisor);
echo "</li>";
echo "<li>";
is_divisible_by($num2, $divisor);
echo "</li>";
echo "<li>";
is_divisible_by($num3, $divisor);
echo "</li>";
echo "</ul>";
?>
