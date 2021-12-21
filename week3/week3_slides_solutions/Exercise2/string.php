<?php

$input1 = "456";
$input2 = "-66";

$sum = 0;
for($i = 0; $i < strlen($input1); $i++) {
    //echo $input1[$i] . '<br>';
    $ch = $input1[$i];
    if($ch != '-') {
        $sum += $ch;
    }
}
echo "Given input $input1, the sum is $sum";

echo "<hr>";

$sum = 0;
for($i = 0; $i < strlen($input2); $i++) {
    //echo $input1[$i] . '<br>';
    $ch = $input2[$i];
    if($ch != '-') {
        $sum += $ch;
    }
}
echo "Given input $input2, the sum is $sum";

?>