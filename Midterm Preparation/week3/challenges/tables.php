<!Doctype html>
<html>
<head>
    <title>Tables using PHP</title>
</head>

<body>

    <!-- DO NOT MODIFY THIS STATIC TABLE -->
    <hr>
    <h1>Static Table</h1>

    <table border='1'>

        <tr>
            <th colspan='2'>
                <font size='6'>My Schedule</font>
            </th>
        </tr>

        <tr>
            <td>Day</td>
            <td>Activity</td>
        </tr>

        <tr>
            <td>Monday</td>
            <td>Think about Justin Babe</td>
        </tr>

        <tr>
            <td>Tuesday</td>
            <td>Think about Justin Babe</td>
        </tr>

        <tr>
            <td>Wednesday</td>
            <td>Think about Justin Babe</td>
        </tr>

        <tr>
            <td>Thursday</td>
            <td>Think about Justin Babe</td>
        </tr>

        <tr>
            <td>Friday</td>
            <td>Think about Justin Babe</td>
        </tr>

        <tr>
            <td>Saturday</td>
            <td>Think about Justin Babe</td>
        </tr>

        <tr>
            <td>Sunday</td>
            <td>Think about Justin Babe</td>
        </tr>

    </table>




    <hr>
    <h1>Dynamic Table</h1>

    <table border='1'>

        <tr>
            <th colspan='2'>
                <font size='6'>My Schedule</font>
            </th>
        </tr>

        <tr>
            <td>Day</td>
            <td>Activity</td>
        </tr>

        <?php

            $days = [ 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday' ];
            $activity = "Think about Justin Babe";

            // YOUR CODE GOES HERE
            // echo "<table border='1'>";
            foreach($days as $day)
            {
                echo "<tr>";
                echo "<td>$day</td><td>$activity</td>";
                echo "</tr>";
                
            }

            // echo "</table>";
        ?>

    </table>

</body>
</html>