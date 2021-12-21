<?php

$course = "Web Application Development";
$totala = 0; 
$nota = 0;
for($i = 0; $i < strlen($course); $i++){

    if ($course[$i]==('a')||$course[$i]==('A')){
        $totala++;
    }
    else{
           $nota++;
    }
}
    echo "Total a chars : " . $totala . '<br>';

    echo "Total non-a chars : " . $nota . '<br>';


?>
