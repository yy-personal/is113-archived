<?php

#Qns 5
function oldestRichest($array){
    $age = 0;
    $salary = 0;
    foreach ($array as $single_entry){
        $current_age = $single_entry['age'];
        $current_salary = $single_entry['Salary'];
        if ($current_age > $age){
            $age = $current_age;
            if ($current_salary > $salary){
                $salary = $current_salary;
            }
        }
    }

    foreach ($array as $check_entry){
        $check_age = $check_entry['age'];
        $check_salary = $check_entry['Salary'];
        if ($check_age == $age && $check_salary == $salary){
            echo $check_entry["name"] . " ";
        }
    }
}

$array = [["name" => "Adam", "age" => 23, "Salary" => 200 ] ,
    ["name" => "Ben", "age" => 41, "Salary" => 105 ] ,
    ["name" => "Collin", "age" => 10, "Salary" => 78 ] ,
    ["name" => "Darren", "age" => 78, "Salary" => 2000 ] ,
    ["name" => "Eric", "age" => 78, "Salary" => 288 ] ,
    ["name" => "Farquar", "age" => 78, "Salary" => 2000]];

oldestRichest($array);
