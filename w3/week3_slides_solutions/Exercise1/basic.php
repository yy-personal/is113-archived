<?php

$course = "Web Application Development";

$i = 0;
$totalA = 0;
$totalNA = 0;

// Solution
$totalA = substr_count(strtolower($course), 'a');
$totalNA = strlen($course) - $totalA;

echo 'Total a chars : ' . $totalA . '<br>';
echo 'Total non-a characters : ' . $totalNA . '<br>';

?>