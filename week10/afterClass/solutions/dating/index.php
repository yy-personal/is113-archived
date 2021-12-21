<?php

require_once 'PersonDAO.php';
// By importing this file, we can create a DAO object.
// DAO object allows us to obtain:
//    - $people (Array of Person objects)
//    - a subset of $people where gender is either 'M' or 'F'
$dao = new PersonDAO();

?>
<html>
<head>
    <title>Dating - Show All Profiles</title>
</head>
<body>
    <h3>Show All Profiles</h3>
     
        <?php
            // YOUR CODE GOES HERE
            // There are multiple Tables within a Table
            // These multiple tables are organized in ONE ROW
            //===================================================================
            // Get Men
            $label = 'Men';
            $people = $dao->getPeopleByGender('M');
            $count = count($people);
            echo "<table border='1'>
                    <tr>
                        <th colspan='$count'>$label ($count)</th>
                    </tr>
                    <tr>
                ";
            foreach($people as $person) { // $person is a Person object
                $person_name = $person = $person->getFullname();
                echo "
                        <td>
                            <table border='1'>
                                <tr>
                                    <th colspan='2'>
                                        <img src='images/{$person->getImage()}'>
                                    </th>
                                </tr>
                ";

                echo "
                                <tr>
                                    <td>fullname</td>
                                    <td>{$person->getFullname()}</td>
                                </tr>
                                <tr>
                                    <td>gender</td>
                                    <td>{$person->getGender()}</td>
                                </tr>
                                <tr>
                                    <td>age</td>
                                    <td>{$person->getAge()}</td>
                                </tr>
                                <tr>
                                    <td>height</td>
                                    <td>{$person->getHeight()}</td>
                                </tr>
                                <tr>
                                    <td>weight</td>
                                    <td>{$person->getWeight()}</td>
                                </tr>
                            </table>
                        </td>
                ";
            }
            echo "
                    </tr>
                </table>
            ";

            echo '<hr>';
            //===================================================================
            // Get Women
            $label = 'Women';
            $people = $dao->getPeopleByGender('F');
            $count = count($people);
            echo "<table border='1'>
                    <tr>
                        <th colspan='$count'>$label ($count)</th>
                    </tr>
                    <tr>
                ";
            foreach($people as $person) { // $person is a Person object
                echo "
                        <td>
                            <table border='1'>
                                <tr>
                                    <th colspan='2'>
                                        <img src='images/{$person->getImage()}'>
                                    </th>
                                </tr>
                ";

                echo "
                                <tr>
                                    <td>fullname</td>
                                    <td>{$person->getFullname()}</td>
                                </tr>
                                <tr>
                                    <td>gender</td>
                                    <td>{$person->getGender()}</td>
                                </tr>
                                <tr>
                                    <td>age</td>
                                    <td>{$person->getAge()}</td>
                                </tr>
                                <tr>
                                    <td>height</td>
                                    <td>{$person->getHeight()}</td>
                                </tr>
                                <tr>
                                    <td>weight</td>
                                    <td>{$person->getWeight()}</td>
                                </tr>
                            </table>
                        </td>
                ";
            }
            echo "
                    </tr>
                </table>
            ";
        ?>
    </table>

</body>
</html>