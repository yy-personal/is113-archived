<?php
function printTriangle($row)
{
    for ($i = 1; $i <= $row; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "</br>";
    }
}

printTriangle(5);
printTriangle(7);

?>
