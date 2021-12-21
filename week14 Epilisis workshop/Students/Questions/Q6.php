<?php

function minimumSteps($array,$start,$end){
    #Write your code here






    



}

$array = [
    [False, False, False, False], 
    [True, True, False, True], 
    [False, False, False, False], 
    [False, False, False, False]
];

echo minimumSteps($array, [3,0], [0,0]); #7
echo minimumSteps($array, [3,3], [0,0]); #6
echo minimumSteps($array, [3,0], [0,3]); #6

