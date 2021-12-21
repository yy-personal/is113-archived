<?php
    $str1 = '--apple--';
    $str2 = '--apple';
    $str3 = 'apple--';
    $str4 = '--ap--ple--';
    // if ( /*CONDITION*/ ) {
    // echo "apple";
    // } else {
    // echo "orange";}
    function my_trim($value, $ch) {
    $result = '';
    for ($i = 0 ; $i < strlen($value) ; $i++) {
    if ($value[$i] != $ch) {
    $result .= $value[$i];
    }
    }return $result;
    }
    var_dump(my_trim($str4, '-'));
?>