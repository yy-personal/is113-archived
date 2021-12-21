<?php

require_once 'common.php';

$dao = new StarDAO();
$stars = $dao->getAll(); // Get an Indexed Array of Star objects
#var_dump($stars);

?>
<html>
<body>

    <?php
        if( count($stars) > 0 ) {

            echo "
                <table border='1'>
                    <tr>
                        <th>Photo</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Headline</th>
                        <th>Edit Link</th>
                    </tr>
            ";

            foreach($stars as $star_object) {
                echo "
                    <tr>
                        <td>
                            <img src='images/{$star_object->getPhoto()}'>
                        </td>
                        <td>
                            {$star_object->getName()}
                        </td>
                        <td>
                            {$star_object->getGender()}
                        </td>
                        <td>
                            {$star_object->getHeadline()}
                        </td>
                        <td>
                            <a href='edit.php?id={$star_object->getID()}'>Edit</a>
                        </td>
                    </tr>
                ";
            }

            echo "
                </table>
            ";
        }
    ?>
</body>
</html>