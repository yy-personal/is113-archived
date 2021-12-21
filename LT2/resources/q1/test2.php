<!--
    Name: Lim Yin Yao
    Email: yinyao.lim.2020
-->

<?php

    ### DO NOT MODIFY THIS FILE ###
    
    require_once "common.php";
    if(class_exists("Member")) {
        $m = new Member("Andy");
        echo $m->getName();
        echo "<br/>";
        $m->setName("Bob");
        echo $m->getName();
    }
?>