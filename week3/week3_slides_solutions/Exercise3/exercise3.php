<?php
##### EXERCISE 3 SOLUTION #########################################
function print_sign($sign, $num) {
    $string = '';
    for ($i = 0; $i < $num; $i++) { 
        # This will add the $sign to the $string variable everytime the forloop runs.
        $string .= $sign;
    }
    echo $string;
}

# Creating the heart shape using the function
print_sign('_',3) . print_sign('$',3) . print_sign('_',3) . print_sign('$',3) . print_sign('_',3);
echo '<br>';
print_sign('_',2) . print_sign('$',5) . print_sign('_',1) . print_sign('$',5) . print_sign('_',2);
echo '<br>';
print_sign('_',2) . print_sign('$',11) . print_sign('_',2);
echo '<br>';
print_sign('_',3) . print_sign('$',9) . print_sign('_',3);
echo '<br>';
print_sign('_',4) . print_sign('$',7) . print_sign('_',4);
echo '<br>';
print_sign('_',6) . print_sign('$',3) . print_sign('_',6);
echo '<br>';
print_sign('_',7) . print_sign ('$',1) . print_sign('_',7);


##### EXERCISE 3 SOLUTION ENDS HERE###################################

# You can explore the use of str_repeat() in order to make this shorter.


?>