<html>
    <head>
        <title>Student List</title>
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
            <h2> Student List </h2>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>School</th>
                </tr>
                <?php
                    spl_autoload_register(function ($class){
                        require_once $class . ".php";
                    });

                    $dao = new StudentDAO();
                    $students = $dao->getAll();
                    foreach($students as $student){
                        echo "
                            <tr>
                                <td>{$student->getId()}</td>
                                <td>{$student->getName()}</td>
                                <td>{$student->getSchool()}</td>
                            </tr>";
                    }
                ?>
            </table>
            <br/>
            <a href="search.php">Search</a>
            <br/>
            <br/>
        </div>
    </body>
</html>