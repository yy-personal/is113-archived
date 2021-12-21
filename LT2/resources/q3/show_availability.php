<?php

    require_once 'common.php';
    
    function display_timetable($students){
        # Add code here
        # You are free to create helper functions        
    }

    ### START OF DO NOT MODIFY ###

    function display($students){
        echo 
        "   
        <!DOCTYPE html>
        <html>
            <body>
        ";

        display_timetable($students);

        echo 
        "
            </body>
        </html>
        ";
    }

    if (count($_GET) != 0){
        $sids = $_GET['sids'];
        $students = [];
        $studentDAO = new StudentDAO();
        foreach($sids as $sid){
            $student = $studentDAO->getStudent($sid);
            $students[] = $student;
        }
        display($students);
    }

    ### END OF DO NOT MODIFY ###

?>