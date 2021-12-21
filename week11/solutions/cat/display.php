<?php

require_once 'CatDAO.php';
$dao = new CatDAO(); // create object
$cats = $dao->getCats(); // call me
//var_dump($cats);

?>
<html>
<body>

    <h1>Our Cats</h1>

    <table border='1'>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Status</th>
        </tr>

        <?php
            foreach($cats as $cat) {
                echo "
                    <tr>
                        <td>
                            {$cat->getName()}
                        </td>
                        <td>
                            {$cat->getAge()}
                        </td>
                        <td>
                            {$cat->getGender()}
                        </td>
                ";
                
                $status_msg = 'Available';
                if( $cat->getStatus() == 'P' )
                    $status_msg = 'Pending Adoption';
                
                echo "
                        <td>
                            $status_msg
                        </td>
                    </tr>
                ";
            }
        ?>

    </table>

</body>
</html>