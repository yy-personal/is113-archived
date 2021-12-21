<?php

require_once 'CourseDAO.php';

$dao = new CourseDAO();

$teacherNames = $dao->getTeacherNames();

$courseArray = [];
// Check if we're here because there's been form submission
if( isset($_POST['submit_search']) ) {

    $teacher = $_POST['teacher'];

    $courseArray = $dao->getCourse3($teacher);
}

?>
<html>
<body>

<h1>Course Search</h1>

<form action='search3.php' method='POST'>

    Taught by:
    <select name='teacher'>
    <?php
        foreach($teacherNames as $name) {
            echo "
            <option value='$name'>$name</option>
            ";
        }
    ?>
    </select>

    <br><br>
    <input type='submit' name='submit_search' value='Find Matching Courses'>

    <?php

    if( count($courseArray) > 0 ) {
        echo "
        <ul>
        ";

        foreach($courseArray as $courseObject) {
            echo "
            <li> {$courseObject->getDetails()} </li>
            ";
        }

        echo "
        </ul>
        ";
    }

    ?>

</form>

</body>
</html>