<?php
$sum2=0;
for($i = 0; $i < strlen($mystring); $i++) {
    
    if ($mystring2[$i] != '-'){
        $sum2 += $mystring2[$i];
    }
}
echo "Sum of second string is ".$sum2
?>