<?php
    spl_autoload_register(function ($class){
        require_once $class . ".php";
    });

    $school = $_POST["school"];
    $min_course_count = $_POST["min_course_count"];
    $sort_by = $_POST["sort_by"];
    $sort_by_id = $sort_by == "id";

    $dao = new StudentDAO();
    $students = $dao->getStudents($school,$min_course_count,$sort_by_id);
?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="student-list.css"/>
    <style>
        table{
            border: 1px solid black;
            border-collapse: collapse;
        }
        td,th {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <div class="centralbox">
        <h2>Matching Students</h2>
        <?php
            echo "
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                    </tr>";
            foreach($students as $student){
                echo "
                    <tr>
                        <td>{$student->getId()}</td>
                        <td>{$student->getName()}</td>
                    </tr>";
            }
            echo "</table>";
        ?>
        <br/>
    </div>
</body>
</html>    