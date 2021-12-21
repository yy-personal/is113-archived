
<?php
include 'student.php';
    $John_info = new student("John",22,"Running");
    $Jane_info = new student("Jane",25,"Cooking");
    $bobby_info = new student("bobby",24,"Eating");
    #Create Bobby Object

    $student_information = [$John_info, $Jane_info];
    $student_information[] = $bobby_info;
    #Write your code here
    echo "<table border = 1px>";
    echo "<tr>
            <th>Name</th>
            <th>Age</th>
            <th>Hobbies</th>
        </tr>";
    foreach ($student_information as $single_student){
        echo "<tr>";
            echo "<td>{$single_student->getName()}</td>";
            echo "<td>{$single_student->getAge()}</td>";
            echo "<td>{$single_student->gethobbies()}</td>";
        echo "</tr>";
    }
    echo "</table>";

?>