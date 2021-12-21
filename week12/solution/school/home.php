<?php

require_once 'include/GradeDAO.php';

session_start();


if( !isset($_SESSION['username']) ) {
    header('Location: login.php');
    return;
}

$username = $_SESSION['username'];
$dao = new GradeDAO();
$grades = $dao->getGrades($username);

?>
<html>
<head>
    <title>Home</title>
</head>
<body>

You are logged in as <b><?= $username ?></b> | <a href='logout.php'>Log Out</a>

<hr>

    <table border='1'>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Grade</th>
        </tr>

    <?php

    foreach($grades as $grade) {
        echo "
        <tr>
            <td> {$grade->getCourseId()} </td>
            <td> {$grade->getCourseTitle()} </td>
            <td> {$grade->getCourseGrade()} </td>
        </tr>
        ";
    } 

    ?>

    </table>

</body>
</html>