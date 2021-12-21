<html>
<body>
<form action="timetable.php">

    Name: <select name="student_name">
        <?php
        
        // All data needed for this question are stored in the database under timetable table
        // Your code here:

        #Get all the unique student names and render as options in the dropdown

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
    // All data needed for this question are stored in the database under timetable table
    // Your can use the following variables declared
    $days    = ['MON', 'TUE','WED', 'THU', 'FRI'];
    $timings = ['830', '1000', '1200','1330', '1530', '1700'];
    
    // Your code here:


    #Get all the timetable records of the selected student

    ?>

</table>

</body>
</html>