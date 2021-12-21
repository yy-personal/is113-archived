<!Doctype html>
<html>
<head>
    <title>Tables using PHP (Part 2)</title>
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
            <td>Think about Zac Babe</td>
        </tr>

        <tr>
            <td>Wednesday</td>
            <td>Think about Nick Babe</td>
        </tr>

        <tr>
            <td>Thursday</td>
            <td>Think about Hyunbin Babe</td>
        </tr>

        <tr>
            <td>Friday</td>
            <td>Think about Minho Babe</td>
        </tr>

        <tr>
            <td>Saturday</td>
            <td>Think about Bogum Babe</td>
        </tr>

        <tr>
            <td>Sunday</td>
            <td>Think about Joongki Babe</td>
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

            $activities = [
                'Monday' => 'Justin',
                'Tuesday' => 'Zac',
                'Wednesday' => 'Nick',
                'Thursday' => 'Hyunbin',
                'Friday' => 'Minho',
                'Saturday' => 'Bogum',
                'Sunday' => 'Joongki'
            ];

            // YOUR CODE GOES HERE
            // echo "<table border='1'>";
            foreach($activities as $day => $name)
            {
                echo "<tr>";
                echo "<td>$day</td><td>Thinkiing about $name Babe</td>";
                echo "</tr>";
                
            }

            // echo "</table>";
        ?>

    </table>

</body>
</html>