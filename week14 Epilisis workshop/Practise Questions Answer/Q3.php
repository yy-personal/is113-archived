<?php

function isPalindrome($string)
{
    $string = strtolower($string);
    // $reversestr = strrev(($string));

    #Alternative way to reverse a string
    $reversestr = "";
    for ($i = strlen($string); $i >= 0; $i--) {
        $reversestr .= $string[$i];
    }

    if ($reversestr == $string) {
        echo "Palindrome!";
    } else {
        echo "Not a Palindrome!";
    }
}

isPalindrome("madam");
isPalindrome("Ellipsis");

