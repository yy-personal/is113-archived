<?php
    ############  DO NOT CHANGE THIS CODE ################
    spl_autoload_register(
        function($class){
            require_once "classes/$class.php";
        }
    );

    $dao = new LectureDAO();
    if (isset($_POST['operation'])){
        echo "<img src='images/sis.png'>";
        $operation = $_POST['operation'];
        if ($operation === 'Show Sample Schedule'){
            echo "  <br/>
                    <h1>Sample Schedule</h1>";
            $room_allocation =  [
                "Room-1" => [new Lecture("L10",9,1), new Lecture("L9",11,3), new Lecture("L8",14,3)],
                "Room-2" => [new Lecture("L6",13,1), new Lecture("L7",9,3), new Lecture("L5",15,1)],
                "Room-3" => [new Lecture("L2",11,1),  new Lecture("L1",9,1), new Lecture("L3",13,1), new Lecture("L4",15,1)],
            ];
            $sample_schedule = new Schedule($room_allocation);
            display_schedule($sample_schedule);
        }
        elseif ($operation === 'Show Schedule for a Date'){
            $date = $_POST['date'];
            $lectures = $dao->getLectures($date);
            if($lectures == null){
                echo "  <br/>
                        <h1>No schedule for $date</h1>";
            }
            else{
                echo "  <br/>
                        <h1>Schedule for $date</h1>";
                $schedule = create_schedule($lectures);
                display_schedule($schedule);
            }
        }
    }
    #########################################################

    # (A) Display the schedule (2 marks)
    function display_schedule($schedule){
        echo "<table border='1'>";
        
        ## Print first row containing all room names
        $room_allocation = $schedule->getRoomAllocation();
        $room_names = array_keys($room_allocation);

        echo "<tr>
                <td></td>";
        foreach($room_names as $room_name){
            echo "<th>$room_name</th>";
        }
        echo "</tr>";

        ## Print one row for each time slot
        $time_slots = [9=>'09-10',10=>'10-11',11=>'11-12',
                    12=>'12-13',13=>'13-14',14=>'14-15',
                    15=>'15-16',16=>'16-17',17=>'17-18'];
        
        foreach($time_slots as $time_slot => $time_slot_label){
        
            echo "
                <tr>
                    <th>$time_slot_label</th>
                ";

            ### Print one cell for each room name
            foreach($room_names as $room_name){

                $to_print = find_what_to_print($time_slot, $room_name, $room_allocation);
                echo $to_print;
            }
            echo "</tr>";
        }
        echo "</table>";
    }

    # Find what to print for a particular time slot and a particular room name
    function find_what_to_print($time_slot, $room_name, $room_allocation){
        $lectures = $room_allocation[$room_name];
        
        ## Loop through all lectures held at $room_name
        foreach ($lectures as $lecture){
            $start_time = $lecture->getStartTime();
            $duration = $lecture->getDuration();

            if ($time_slot == $start_time) {
                ### A lecture starts at this time slot
                ### We want to print a new table cell
                $duration = $lecture->getDuration();
                $id = $lecture->getId();
                return "<td rowspan='$duration'>$id</td>";
            }
            elseif($time_slot > $start_time && $time_slot < ($start_time+$duration)){
                ### A lecture covers this time slot but starts earlier
                ### We want to print nothing
                return "";
            }
        }

        // No lecture covers this time slot
        // We want to print an empty cell
        return "<td></td>";
    }

    ################################

    # (B) Put lectures into a schedule (4 marks)
    function create_schedule($lectures){
        $room_allocation = []; # Creates an empty room allocation
        uasort($lectures,'cmp'); # Sort lectures based on their start time

        foreach($lectures as $lecture){

            # Find an available room in the room allocation so far for $lecture
            $room_name = find_available($room_allocation,$lecture);

            # If no such room exists
            if($room_name == NULL){
                # Open a new room
                # Arrange for the $lecture to be held in the new room
                $room_allocation['Room-'.(count($room_allocation)+1)] = [$lecture];
            }
            else{
                # Arrange for the $lecture to be held in $room_name
                # that has been allocated before
                $room_allocation[$room_name][] = $lecture;
            }
        }
        return new Schedule($room_allocation);
    }

    # Helper function for uasort
    # $a = Lecture object
    # $b = Lecture object
    # returns -1, if the start time of $a is less than that of $b
    #          1, otherwise
    function cmp($a,$b){
        return ($a->getStartTime() < $b->getStartTime()) ? -1: 1;
    }

    # Find an available room for $lecture among those 
    # that appear in $room_allocation
    function find_available ($room_allocation,$lecture){
        foreach($room_allocation as $room_name => $booked_slots){
            $available = true;
            foreach($booked_slots as $booked_slot){
                if($lecture->getStartTime() < ($booked_slot->getStartTime() + $booked_slot->getDuration())){
                    $available = false;
                    break;
                }
            }
            if($available){
                return $room_name;
            }
        }
    }
    ################################
?>