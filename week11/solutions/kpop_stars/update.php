<?php

require_once 'common.php';

$msg = '';
$status = false;
if( isset($_POST['id']) && isset($_POST['headline']) ) {
    $id = $_POST['id'];
    $headline = $_POST['headline'];

    $dao = new StarDAO();
    $status = $dao->updateHeadline($id, $headline); // Get an Indexed Array of Star objects
}


?>
<html>
<body>
    <?php
        if( $status ) {
            echo "<h1>Update was successful!</h1>";
            echo "Click <a href='display.php'>here</a> to return to Main Page";
        }
        else {
            echo "<h1>Update was NOT successful!</h1>";
        }
    ?>
</body>
</html>