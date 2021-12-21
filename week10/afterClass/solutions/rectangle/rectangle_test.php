<?php
    require_once "Rectangle.php";
    # Enter code here
    $r1 = new Rectangle(15.0,10.2);
    $r2 = new Rectangle(15.2,12.5);
    echo 'Rectangle $r1: ' . "{$r1->toString()}<br/>";
    echo 'Rectangle $r2: ' . "{$r2->toString()}<br/>";
    echo "<br/>";
    echo 'The area of $r1 is ' . $r1->getArea() . ' sq cm <br/>';
    echo 'The perimeter of $r1 is ' . $r1->getPerimeter() . ' cm <br/>';
    echo 'The area of $r2 is ' . $r2->getArea() . ' sq cm <br/>';
    echo 'The perimeter of $r2 is ' . $r2->getPerimeter() . ' cm <br/>';
    
?>