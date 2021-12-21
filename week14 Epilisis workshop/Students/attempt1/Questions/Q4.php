<?php

#Qns 4
function oldest($assoc){
    #Write your code here
    $oldest = [];
    $current_age = 0;
    foreach($assoc as $name=>$age){
        if($age>$current_age){
            $current_age = $age;
            $oldest = [$name];
        }
        elseif ($age == $current_age) {
            $oldest[] = $name;
        }
    }
    $outputstr = implode(',', $oldest);
    echo $outputstr;
}    


$assoc = ["Adam" => 23, "Ben" => 42, "Colin" => 10, "Darren" => 78, "Eric" => 78, "George" => 66];
oldest($assoc);