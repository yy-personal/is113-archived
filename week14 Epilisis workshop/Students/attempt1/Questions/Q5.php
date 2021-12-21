<?php

#Qns 5
function oldestRichest($array){
    #Write your code here
    $oldestRichestPpl = [];
    $oldestAge = 0;
    $highestSalary = 0;

    foreach($array as $person){
        $personName = $person['name'];
        $personage = $person['age'];
        $personSalary = $person['Salary'];
        if($personage>$oldestAge && $personSalary>$highestSalary){
            $oldestAge = $personage;
            $highestSalary = $personSalary;

            $oldestRichestPpl = [$personName];
        }
        elseif($personage == $oldestAge && $personSalary==$highestSalary)
        {
            $oldestRichestPpl[] = $personName;
        }
        
    }
    var_dump($oldestRichestPpl);













    
}

$array = [["name" => "Adam", "age" => 23, "Salary" => 200 ] ,
    ["name" => "Ben", "age" => 41, "Salary" => 105 ] ,
    ["name" => "Collin", "age" => 10, "Salary" => 78 ] ,
    ["name" => "Darren", "age" => 78, "Salary" => 2000 ] ,
    ["name" => "Eric", "age" => 78, "Salary" => 288 ] ,
    ["name" => "Farquar", "age" => 78, "Salary" => 2000]];

oldestRichest($array);
