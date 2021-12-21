<?php
    function print_sign($sign, $num){
        echo str_repeat($sign,$num);
    }

print_sign("_",3); print_sign("$",3); print_sign("_",3);print_sign("$",3);print_sign("_",3);echo '<br>';
print_sign("_",2);print_sign("$",5);print_sign("_",1);print_sign("$",5);print_sign("_",2);echo '<br>';
print_sign("_",2);print_sign("$",5);print_sign("$",6);print_sign("_",2);echo '<br>';
print_sign("_",3);print_sign("$",9);print_sign("_",3);echo '<br>';
print_sign("_",6);print_sign("$",3);print_sign("_",6);echo '<br>';
print_sign("_",7);print_sign("$",1);print_sign("_",7);echo '<br>';



?>