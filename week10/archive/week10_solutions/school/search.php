<?php

require_once 'CourseDAO.php';
$dao = new CourseDAO();

$courseArray = [];
// Check if we're here because there's been form submission
if( isset($_POST['submit_search']) ) {

    $term = $_POST['term'];
    $credit = $_POST['credit'];

    $courseArray = $dao->getCourse($term, $credit);
}

?>
<html>
<body>

<h1>Course Search</h1>

<form action='search.php' method='POST'>

    Term:
    <label>
        <input type='radio' name='term' value='1'> 1
    </label>
    <label>
        <input type='radio' name='term' value='2'> 2
    </label>

    <br>
    <b>AND</b>
    <br>

    Credit:
    <label>
        <input type='radio' name='credit' value='2'> 2
    </label>
    <label>
        <input type='radio' name='credit' value='3'> 3
    </label>

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