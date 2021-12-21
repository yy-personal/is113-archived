<?php
    # Your answer
    require_once "../display.php";
    $schedule_answer = create_schedule($lectures);
    
    # Check constraints
    $c1_4 = check_constraint_1_4($schedule_answer,$lectures);
    $c2 = check_constraint_2($schedule_answer,$lectures);
    $c3 = check_constraint_3($schedule_answer);
    echo "Constraints C1 & C4: " . ($c1_4?"OK":"NOT OK");
    echo "<br/> Constraint C2: " . ($c2?"OK":"NOT OK");
    echo "<br/> Constraint C3: " . ($c3?"OK":"NOT OK");
    echo "<br/> Test Case Outcome (Sample): " . (($c1_4 && $c2 && $c3)?"PASS":"FAIL");

    # Helper functions

    # Check constraint 1, 4: 
    # Each Lecture object is assigned to a room
    # All Lecture objects assigned to the rooms appear in $lectures
    function check_constraint_1_4($schedule_answer,$lectures){
        $room_allocation = $schedule_answer->getRoomAllocation();
        $lectures_in_answer = [];
        foreach($room_allocation as $room_names => $lectures_in_room){
            foreach($lectures_in_room as $lecture_in_room){
                $lectures_in_answer[] = $lecture_in_room->getId() . 
                                        "-" . $lecture_in_room->getStartTime() . 
                                        "-" . $lecture_in_room->getDuration();
            }
        }
        if(count($lectures_in_answer) === count($lectures)){
            foreach($lectures as $lecture){
                $lecture_info = $lecture->getId() . 
                                "-" . $lecture->getStartTime() . 
                                "-" . $lecture->getDuration();
                if(!in_array($lecture_info,$lectures_in_answer)){
                    return false;
                }
            }
            return true;
        }
        else{
            return false;
        }
    }

    # Check constraint 2: The number of rooms is as small as possible
    function check_constraint_2($schedule_answer,$lectures){
        global $max_rooms_answer;
        $room_allocation = $schedule_answer->getRoomAllocation();
        return count($room_allocation) === $max_rooms_answer;
    }

    #  Check constraint 3: Multiple lectures do not happen in the same room at the same time
    function check_constraint_3($schedule_answer){
        $ra = $schedule_answer->getRoomAllocation();
        foreach($ra as $room_name => $lectures){
            $occupied_arr = [9=>false,10=>false,11=>false,12=>false,
                            13=>false,14=>false,15=>false,16=>false,17=>false];
            foreach($lectures as $lecture){
                $start_time = $lecture->getStartTime();
                $duration = $lecture->getDuration();
                for($i=0;$i<$duration;$i++){
                    $start_time_cons = $start_time + $i;
                    if(array_key_exists($start_time_cons,$occupied_arr)){
                        if(!$occupied_arr[$start_time_cons]){
                            $occupied_arr[$start_time_cons] = true;
                        }
                        else{
                            return false;
                        }
                    }
                    else{
                        return false;
                    }
                }
            }
        }
        return true;
    }
?>