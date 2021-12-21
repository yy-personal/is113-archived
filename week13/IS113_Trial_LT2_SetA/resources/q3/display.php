<?php

/*
    Name:

    Email:
*/

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
    
# Part A (Display the schedule): ENTER CODE HERE == 
function display_schedule($schedule){
    echo "<table border='1'>";
    echo "</table>";
}
# ====

# Part B (Put lectures into a schedule): ENTER CODE HERE == 
function create_schedule($lectures){
    $room_allocation = [];
    return new Schedule($room_allocation);
}
# ====
?>