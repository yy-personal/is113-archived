<?php
    $list1 = ["John"=>12, "Kate"=>15, "Henry"=>35];
    $list2 = ["Mike"=>18, "Scott"=>20, "Joseph"=>48, "Larry"=>54];
    echo "Output:";
    var_dump(merge($list1,$list2));
    
    $list4 = ["John"=>12, "Kate"=>15, "Mike"=>18, "Scott"=>20, "Henry"=>35, "Joseph"=>48, "Larry"=>54];
    echo "Correct answer:";
    var_dump($list4);

    function merge($list1,$list2){
        # Write code here
        return [];
        # End of code
    }
?>
