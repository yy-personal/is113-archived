<?php

    ### DO NOT MODIFY THIS FILE ###

    require_once "show_availability.php";

    ## Test Case 1
    
    echo "<h3>TC1:</h3>";

    $sids = ['29','48'];
    $students = [];
    $studentDAO = new StudentDAO();
    foreach($sids as $sid){
        $student = $studentDAO->getStudent($sid);
        $students[] = $student;
    }
    display_timetable($students);

    ## Test Case 2
    
    echo "<h3>TC2:</h3>";

    $sids = ['15', '25', '38'];
    $students = [];
    $studentDAO = new StudentDAO();
    foreach($sids as $sid){
        $student = $studentDAO->getStudent($sid);
        $students[] = $student;
    }
    display_timetable($students);

    ## Test Case 3
    
    echo "<h3>TC3:</h3>";

    $sids = ['26', '36', '48'];
    $students = [];
    $studentDAO = new StudentDAO();
    foreach($sids as $sid){
        $student = $studentDAO->getStudent($sid);
        $students[] = $student;
    }
    display_timetable($students);
    
?>