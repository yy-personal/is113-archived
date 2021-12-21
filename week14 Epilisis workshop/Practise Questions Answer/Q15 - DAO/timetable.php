<html>
<body>
<form action="timetable.php">

    Name: <select name="student_name">
        <?php
        
        // All data needed for this question are stored in the database under timetable
        // Your code here:

        require_once 'include/common.php';

        $dao = new CourseDAO();

        $names = $dao->getStudentNames();

        foreach($names as $name){
            echo "<option>$name</option>";
        }

        ?>
    </select>
    <input type='submit' value='Show Timetable' >

</form>

<table border="1">
    <tr>
        <th></th>
        <th>08:30am - 10:00am</th>
        <th>10:00am - 11:30am</th>
        <th>12:00nn - 1:30pm</th>
        <th>1:30pm - 3:00pm</th>
        <th>3:30pm - 5:00pm</th>
        <th>5:00pm - 6:30pm</th>
    </tr>

    <?php
    // All data needed for this question is stored in $courses declared above
    // Your can use the following variables declared
    $days    = ['MON', 'TUE','WED', 'THU', 'FRI'];
    $timings = ['830', '1000', '1200','1330', '1530', '1700'];
    
    // Your code here:


    if(!empty($_GET)){

        $input = $_GET['student_name'];

        $courses =  $dao->retrieve($input);

        foreach ($days as $day) {
            echo "<tr>";
            echo "<th>$day</th>";

            $empty = 0;
            
            foreach ($timings as $timing){
                if ($empty < 0){
                    $empty = 0;
                }

                foreach ($courses as $course) {
                    if ($timing == $course->startTime && $day == $course->weekOfDay){
                        echo "<td style='text-align:center;' colspan='{$course->numUnits}'>";
                            echo "{$course->courseCode} <br> {$course->courseDesc}";
                        echo "</td>";

                        $empty = $course->numUnits;
                    }
                }
                
                if($empty == 0){
                    echo "<td></td>";
                }
                
                $empty--; 
            
            }

            echo "</tr>";
        }

    }

    ?>

</table>

</body>
</html>