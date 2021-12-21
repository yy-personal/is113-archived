<?php

// Create a script to construct the following pattern, using nested for loop.
// Complete this function
function create_shape($num) {
    $shape_array = [];
    for($i = 1; $i <= $num; $i++) {
        $str = '';
        for($j = 0; $j < $i; $j++) {
            $str = $str . ' * ';
        }
        $shape_array[] = $str;
    }
    return $shape_array;
}

$num = $_GET['num'];
$arr = create_shape($num);

foreach($arr as $item) {
    echo "$item<br>";
}

?>