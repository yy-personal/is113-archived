<?php
    # Enter code here
    require_once "Counter.php";
    $c1 = new Counter(0);
    echo "Before increment - First counter value: {$c1->getValue()}<br/>";
    $c1->increment();
    $c1->increment();
    echo "After incrementing 2 times - First counter value: {$c1->getValue()}<br/>";
 
    $c2 = new Counter(7);
    echo "Before decrement - Second counter value: {$c2->getValue()}<br/>";
    $c2->decrement();
    $c2->decrement();
    echo "After decrementing 2 times - Second counter value: {$c2->getValue()}<br/>";
 
?>