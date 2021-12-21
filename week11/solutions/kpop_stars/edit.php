<?php

require_once 'common.php';

$id = '';
if( isset($_GET['id']) ) {
    $id = $_GET['id'];

    $dao = new StarDAO();
    $star_object = $dao->getStarByID($id); // Get an Indexed Array of Star objects
    //var_dump($star_object);
}


?>
<html>
<body>

    <form action='update.php' method='POST'>

    <?php
        if($star_object) {

            // Hidden Input
            echo "
                <input type='hidden' name='id' value='{$star_object->getID()}'>
            ";

            echo "
                Name: {$star_object->getName()}
                <br>

                Gender: {$star_object->getGender()}
                <br>
            ";

            echo "
                Headline: 
                <input type='text' name='headline' size='70' value='{$star_object->getHeadline()}'>
                <br>
            ";

            echo "
                <br>
                <input type='submit' value='Update Info'>
            ";
        }
    ?>

    </form>

</body>
</html>