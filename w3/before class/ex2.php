<?php
$mystring="456";
$mystring2="-66";
$sum=0;

for($i = 0; $i < strlen($mystring); $i++) {
    
    if ($mystring[$i] != '-'){
        $sum += $mystring[$i];
    }
}
echo "Sum of first string is ".$sum;

echo "<hr>";

$sum2=0;

for($i = 0; $i < strlen($mystring); $i++) {
    
    if ($mystring2[$i] != '-'){
        $sum2 += $mystring2[$i];
    }
}
echo "Sum of second string is ".$sum2
?>