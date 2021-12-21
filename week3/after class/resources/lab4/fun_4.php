<?php

    /*
    A sandwich typically consists of cheese, meat or/and vegetables placed in between two slices of bread. 
    Consider a string “remember”, the sub-string “memb” is sandwiched between “re” and its mirror “er” on the other side.  In fun_4.php, write a function named get_sandwich that takes in a string and returns the sandwiched string, if any, or None. 

    */

    if(isset($_GET["string"])) {

        $string = $_GET["string"];
        
        echo "Sandwich substring for " . $string . ": " 
                    . get_sandwich($string) . " <br><br>";
    
    }

    function get_sandwich($string) {

       // add your code here
       
    }

?>


<form>

Enter a sandwich string: <input name="string" type="text">
<br/>

<input type="submit">

</form>