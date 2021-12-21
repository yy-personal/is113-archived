<?php

    ### DO NOT MODIFY THIS FILE ###

    require_once "show_groups.php";
    
    ### Preparation
    
    $studentDAO = new StudentDAO();
    $students = $studentDAO->getStudents();

    ### Test case 1
    
    echo "<h3>TC1:</h3>";

    $min_size = 2;
    $max_size = 3;
    $min_gpa = 3.5;

    $study_groups = create_study_groups($students, $min_size, $max_size, $min_gpa);

    if (validate($students, $study_groups, $min_size, $max_size, $min_gpa)){
        echo "<strong>Status: Pass</strong><br/><br/>";
    }
    else{
        echo "<strong>Status: Fail</strong><br/><br/>";
    }

    ### Test case 2
    
    echo "<h3>TC2:</h3>";

    $min_size = 5;
    $max_size = 10;
    $min_gpa = 3.5;

    $study_groups = create_study_groups($students, $min_size, $max_size, $min_gpa);

    if (validate($students, $study_groups, $min_size, $max_size, $min_gpa)){
        echo "<strong>Status: Pass</strong><br/><br/>";
    }
    else{
        echo "<strong>Status: Fail</strong><br/><br/>";
    }

    ### Test case 3

    echo "<h3>TC3:</h3>";

    $min_size = 51;
    $max_size = 100;
    $min_gpa = 3.5;

    $study_groups = create_study_groups($students, $min_size, $max_size, $min_gpa);
        
    if ($study_groups === null){
        echo "<strong>Status: Pass</strong><br/><br/>";
    }
    else{
        echo "Error: The constraints cannot be satisfied, but the return value is not <strong>null</strong><br/><br/>";
        echo "<strong>Status: Fail</strong><br/><br/>";
    }

    ### Validation

    function validate($students, $study_groups, $min_size, $max_size, $min_gpa){

        ### Check condition 1
        ### All students are included in a study group

        $dict = [];
        $status = [];
        $status[] = true;
        foreach($students as $student){
            $id = $student->getId();
            $dict[$id] = false;
        }
        foreach($study_groups as $study_group){
            foreach($study_group->getMembers() as $member){
                $id = $member->getId();
                $dict[$id] = true;
            }
        }
        foreach($dict as $id => $covered){
            if(!$covered){
                $status[0] = false;
                break; 
            }
        }

        ### Check condition 2
        ### The size of a study group is at least $min_size and at most $max_size

        $status[] = true;
        foreach($study_groups as $study_group){
            $size = count($study_group->getMembers());
            if ($size < $min_size || $size > $max_size){
                $status[1] = false;
                break;
            }
        }

        ### Check condition 3
        ### For each study group, at least one student has GPA that is at least $min_gpa

        $status[] = true;
        foreach($study_groups as $study_group){
            $student_found = false;
            foreach($study_group->getMembers() as $member){
                if ($member->getGPA() >= $min_gpa){
                    $student_found = true;
                    break;
                }
            }
            if(!$student_found){
                $status[2] = false;
            }
        }
        

        if (!$status[0]){
            echo 'Error: Not all students in $students are assigned to a study group in $study_groups <br/>';
        }
        if (!$status[1]){
            echo 'Error: Size of at least one study group does not satisfy $min_size and $max_size requirements <br/>';
        }
        if (!$status[2]){
            echo 'Error: At least one study group does not have a student with GPA of at least $min_gpa <br/>';
        }

        $status = array_unique($status);

        if (count($status) == 2 || $status[0] == false){
            echo "<br/>";
            return false;
        } 
        else{
            return true;
        }
    }
?>