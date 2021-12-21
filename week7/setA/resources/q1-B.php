<?php
/* 
    Name:  
    Email: 
*/
var_dump($_GET);
$number_array = explode(",", $_GET['numbers']);
var_dump($number_array);
$divisor = $_GET['divisor'];

function is_divisible_by($num, $n){
    if ($num%$n==0){
        echo "$num is divisible by $n: YES";
    }
    else{
        echo "$num is divisible by $n: NO";
    }
}

echo "<ul>";
foreach($number_array as $num){
    echo "<li>";
    is_divisible_by($num, $divisor);
    echo"</li>";
}
echo "</ul>";

?>