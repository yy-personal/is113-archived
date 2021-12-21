<?php
    spl_autoload_register(
        function($class){
            require_once "../classes/$class.php";
        }
    );
    $max_rooms_answer = 3;
    $lectures = [   new Lecture("L1",9,1),
                    new Lecture("L4",15,1),
                    new Lecture("L5",9,3),
                    new Lecture("L2",11,1),
                    new Lecture("L3",13,1),
                    new Lecture("L6",13,1),
                    new Lecture("L7",15,1),
                    new Lecture("L8",9,1),
                    new Lecture("L9",11,3),
                    new Lecture("L10",14,3)     ];

    require_once "test-common.php";

?>