<?php

function FizzBuzz()
{
    $result = "";
    for ($i = 1; $i < 50; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            $result .= "FizzBuzz ";
        } else if ($i % 3 == 0) {
            $result .= "Fizz ";
        } else if ($i % 5 == 0) {
            $result .= "Buzz ";
        }
    }

    echo "<h1>Expected Result: </h1>";

    echo "<h3>$result</h3>";
}

FizzBuzz();

?>