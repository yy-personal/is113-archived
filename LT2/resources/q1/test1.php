<!--
    Name: Lim Yin Yao
    Email: yinyao.lim.2020
-->
<?php
    
    ### DO NOT MODIFY THIS FILE ###
    
    require_once "common.php";
    $sli1 = new SaleLineItem("Chicken Rice", 2, 4.5);
    $sli2 = new SaleLineItem("Mee Siam", 1, 4);
     
    $s1 = new Sale(2021, [$sli1, $sli2]);
    $your_answer = $s1->getDollarsReceived();

    echo "<h3> Correct answer: 13</h3>";
    echo "<h3> Your answer: $your_answer</h3>";

?>