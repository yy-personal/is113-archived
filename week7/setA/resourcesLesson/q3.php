<?php
/* 
    Name:  daifa.fu.2019
    Email: daifa.fu.2019@smu.edu.sg
*/
​
// $students is an Array of:
//    Associative Arrays, where each Associative Array contains:
//        key (name) => value (string)
//        key (courses) => value (Array of Arrays)
$students = [
    [
        "name"    => 'Jong Un Kim',
        "courses" => [
            ['IS111', 'Intro Programming', 'MON', '1000', 1],
            ['CS102', 'Discrete Mathematics', 'TUE', '0830', 2],
            ['EE200', 'Intro to Circuits', 'TUE', '1330', 1],
            ['WRIT100', 'Writing and Reasoning', 'WED', '1000', 1],
            ['LIT380', 'Intro to Korean Literature', 'FRI', '1630', 1]
        ]
    ],
    [
        "name"    => 'Donald Trump',
        "courses" => [
            ['IS112', 'Data Management', 'TUE', '0830', 2],
            ['WRIT100', 'Writing and Reasoning', 'WED', '1000', 1],
            ['OBHR101', 'Leadership Team Building', 'WED', '1200', 2],
            ['IS113', 'Web Application Development', 'THU', '1500', 2],
            ['STAT202', 'Bayesian Logics', 'FRI', '1000', 1]
        ]
    ],
    [
        "name"    => 'Hugo Chavez',
        "courses" => [
            ['IS111', 'Intro Programming', 'MON', '1000', 1],
            ['IS112', 'Data Management', 'TUE', '0830', 2],            
            ['EE200', 'Intro to Circuits', 'TUE', '1330', 1],
            ['OBHR101', 'Leadership Team Building', 'WED', '1200', 2],
            ['STAT202', 'Bayesian Logics', 'FRI', '1500', 1]
        ]
    ]
];
​
// INPUT  : $students Array
// OUTPUT : Return an Array of student names (String)
function getStudentNames($students) {
    $arr = [];
    // Part A
    // YOUR CODE GOES HERE
    $list_student = [];
    foreach ($students as $one_student){
        $student_name = $one_student['name'];
        $list_student[] = $student_name;
        // $list_student[] = $one_student['name']
    }
​
    // var_dump($list_student);
    return $list_student;
}
​
// Select the previous selection
$selected_student = 'Jong Un Kim';
if (isset($_POST['student_name'])) {
    $selected_student = $_POST['student_name'];
}
​
​
// Part B
function getStudentCourse($students, $name){
    $result = [];
    foreach ($students as $one_student){
        if ($name == $one_student['name']){
            $student_course = $one_student['courses'];
            foreach ($student_course as $one_course){
                $key = $one_course[2];
                $course = [
                    $one_course[0],
                    $one_course[1],
                    $one_course[3],
                    $one_course[4],
                ];
        
                $result[$key][] = $course;
            }
        }
    }
​
    // var_dump($result);
    return $result;
}
​
// getStudentCourse($students, 'Jong Un Kim');
​
​
?>
<html>
<body>
    <form action='q3.php' method='POST'>
        Name:
        <select name='student_name'>
            <?php
                // Part A
                // YOUR CODE GOES HERE
                $student_names = getStudentNames($students); // DO NOT MODIFY THIS LINE
                // YOUR CODE CONTINUES HERE
                foreach ($student_names as $name){
                    $selected = '';
                    if ($name == $selected_student){
                        $selected = 'selected';
                    } 
                    
                    echo "<option value='$name' $selected>$name</option>";
                    
                }
            ?>
        </select>
        <input type='submit' value='Show Timetable' />
    </form>
​
    <table border='1'>
        <tr>
            <th></th>
            <th>08:30am - 10.00am</th>
            <th>10:00am - 11:30am</th>
            <th>12:00nn - 1:30pm</th>
            <th>1:30pm - 3:00pm</th>
            <th>3:00pm - 4:30pm</th>
            <th>4:30pm - 6:00pm</th>
        </tr>
​
        <?php
            $weekday = ['MON', 'TUE', 'WED', 'THU', 'FRI'];
            $course_startTime = ['0830', '1000', '1200', '1330', '1500', '1630'];
​
            $student_course = getStudentCourse($students, $selected_student);
            // var_dump($student_course);
            
            foreach ($weekday as $day){
                echo "
                <tr>
                    <td>$day</td>
                ";
​
                $day_course = [];
                if (array_key_exists($day, $student_course)){
                    $day_course = $student_course[$day];
                    // echo "<hr><h1> $day </h1>";
                    // var_dump($day_course);
                }
                
                for ($i = 0; $i < 6; $i++){
                    $course_time = $course_startTime[$i];
                    $course_detail = '';
                    $course_unit = '';
                    foreach($day_course as $one_day_course){
                        if ($course_time == $one_day_course[2]){
                            $course_detail = "$one_day_course[0] <br> $one_day_course[1]";
                            $course_unit = $one_day_course[3];
​
                            $i += $one_day_course[3] - 1;
                        }
​
                    }
​
                    echo "<td align='center' colspan='$course_unit'>$course_detail</td>";
                }
                
                echo"
                </tr>
                ";
            }
​
        ?>
        
    </table>
</body>
