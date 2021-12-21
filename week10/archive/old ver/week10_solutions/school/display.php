<?php

require_once 'CourseDAO.php';

$dao = new CourseDAO();

$courseArray = $dao->getCourses();

?>
<html>
<body>

<h1>Available Courses</h1>

<table border='1'>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Term</th>
        <th>Credits</th>
        <th>Teachers</th>
    </tr>

    <?php
        foreach($courseArray as $courseObject) {
            $id = $courseObject->getId();
            $title = $courseObject->getTitle();
            $term = $courseObject->getTerm();
            $credits = $courseObject->getCredits();
            $teacherObjectArray = $courseObject->getTeachers();
            
            $num_teachers = count($teacherObjectArray);

            $rowspan = $num_teachers;

            echo "
            <tr>
                <td rowspan='$rowspan'>$id</td>
                <td rowspan='$rowspan'>$title</td>
                <td rowspan='$rowspan'>$term</td>
                <td rowspan='$rowspan'>$credits</td>
            ";

            $is_first_time = TRUE;
            for($i = 0; $i < $num_teachers; $i++) {

                $teacherObject = $teacherObjectArray[$i];

                if( $is_first_time ) {
                    $is_first_time = FALSE;
                }
                else {
                    echo "
                    <tr>
                    ";
                }
                

                echo "
                    <td>
                        [{$teacherObject->getId()}] {$teacherObject->getFullname()} ({$teacherObject->getGender()})
                    </td>
                </tr>
                ";
            }
        }
    ?>

</table>

</body>
</html>