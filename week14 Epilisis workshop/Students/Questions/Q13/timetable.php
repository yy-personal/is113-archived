<?php

// import
require_once 'Course.php';

$courses = [
    new Course("Apple LEE", "IDIS001", "Analytical Skills", "TUE", "1330", 1), 
    new Course("Apple LEE", "IS112", "Data Management", "TUE", "830", 2), 
    new Course("Apple LEE", "IS113", "Web Application Development", "THU", "1530", 2), 
    new Course("Apple LEE", "WRIT001", "Programme in Writing and Reasoning", "MON", "1000", 1), 
    new Course("Apple LEE", "WRIT001", "Programme in Writing and Reasoning", "WED", "1000", 1), 
    new Course("Bruce LOH", "OBHR001", "Leadership and Team Building", "WED", "1200", 2), 
    new Course("Bruce LOH", "IS112", "Data Management", "TUE", "830", 2), 
    new Course("Bruce LOH", "IS113", "Web Application Development", "THU", "1530", 2), 
    new Course("Bruce LOH", "WRIT001", "Programme in Writing and Reasoning", "FRI", "1000", 1), 
    new Course("Bruce LOH", "WRIT001", "Programme in Writing and Reasoning", "WED", "1000", 1), 
    new Course("Colin TEO", "CS110", "Great Ideas in Computer Science", "TUE", "830", 2), 
    new Course("Colin TEO", "CS111", "Programming Methodology", "TUE", "1200", 2), 
    new Course("Colin TEO", "CS112", "Database Systems", "THU", "1530", 2), 
    new Course("Colin TEO", "CS113", "Object Oriented Programming", "MON", "830", 2)
];

?>

<html>
<body>
<form action="timetable.php">

    Name: <select name="student_name">
        <?php
        
        // All data needed for this question is stored in $courses declared above
        // Your code here:
        

        ?>
    </select>
    <input type='submit' value='Show Timetable' name = 'submit' >

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

    ?>

</table>

</body>
</html>