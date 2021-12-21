<?php
$dict1 = reverse_dict(["a"=>[1,2,3], "b"=>[1,2], "c"=>[3,4], "d"=>[5,6]]);
$student_subjects  =  reverse_dict(["Jane"=>["Economics","Physics","Chemistry"], "Mark"=>["Literature","Chemistry","Biology"], "Sarah"=>["Literature","Physics","Chemistry"]]);
 
var_dump($dict1);
var_dump($student_subjects);

function reverse_dict($dict){
    # Write code here
    return [];
    # End of code
}

?>
