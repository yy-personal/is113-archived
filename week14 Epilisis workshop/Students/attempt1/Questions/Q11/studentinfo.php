
<?php
include 'student.php';
    #Write your code here
    $john = new Student('John', 22, 'Running');
    $jane = new Student('Jane', 25, 'Cooking');

    $student_information = [$john, $jane];


?>
<!DOCTYPE html>
<html lang="en">
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Hobbies</th>
        </tr>
        <?php
            foreach($student_information as $student){
                $name = $student->getName();
                $age = $student->getAge();
                $hobbies = $student->getHobbies();
                echo "
                    <tr> 
                        <td>$name</td>
                        <td>$age</td>
                        <td>$hobbies</td>
                    </tr>
                ";

            }

        ?>

    </table>
<body>
    
</body>
</html>