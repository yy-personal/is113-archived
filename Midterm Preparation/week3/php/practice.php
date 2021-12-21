<?php


// Given this associative array, complete Parts A, B, C
$student_grades = [
    'Kee Hock' => ['A+', 'A', 'B+', 'A-'],
    'Debbie' => ['A', 'B+', 'A-', 'A'],
    'Patrick' => ['B', 'C', 'F', 'B-']
];


//========================================
// Part A
// Your code goes here
echo "<table border = '1'>";
echo '<tr>';
echo '<th>Name</th>';
echo '<th>Grades</th>';
echo '</tr>';

    foreach($student_grades as $name => $grades_list)
    {
        foreach($grades_list as $grade)
        {   
                echo '<tr>';
                echo "<td>$name</td><td>$grade</td>";
                echo '</tr>';
        }
        
    }

    

    echo '</table>';


echo '<hr>';


//========================================
// Part B
// Your code goes here
echo "<table border = '1'>";
echo '<tr>';
echo '<th>Name</th>';
echo '<th>Grades</th>';
echo '</tr>';

    foreach($student_grades as $name => $grades_list)
    {
        foreach($grades_list as $grade)
        {   
            if ($grade=='A+' or $grade == 'A')
            {
                echo '<tr>';
                echo "<td>$name</td><td><font color=blue size='6'>$grade</font></td>";
                echo '</tr>';
            }
            elseif ($grade=='A-')
            {
                echo '<tr>';
                echo "<td>$name</td><td><font color=green size='5'>$grade</font></td>";
                echo '</tr>';
            }
            else
            {
                echo '<tr>';
                echo "<td>$name</td><td><font color=red size='4'>$grade</font></td>";
                echo '</tr>';
            }
        }
        
    }

    

    echo '</table>';



echo '<hr>';


//========================================
// Part C
// Your code goes here
echo "<table border = '1'>";
echo '<tr>';
echo '<th>Name</th>';
echo '<th>Grades</th>';
echo '</tr>';

    foreach($student_grades as $name => $grades_list)
    {
        $length = count($grades_list)+1;
        echo '<tr>';
        echo "<td rowspan = '$length'>$name</td>";
        echo '</tr>';
        
        foreach($grades_list as $grade)
        {   
                echo '<tr>';
                echo "<td>$grade</td>";
                echo '</tr>';
        }
        
    }

    

    echo '</table>';


echo '<hr>';


?>