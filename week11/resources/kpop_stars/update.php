<?php

// ARE YOU MISSING SOMETHING HERE?
// DO YOU REQUIRE ANY EXTERNAL PHP FILES?
// CHECK ERROR MESSAGES IN WEB BROWSER & DEBUG!

$status = false;
if( isset($_POST['id']) && isset($_POST['headline']) ) {

    $dao = new StarDAO();

    // YOUR CODE GOES HERE

    // The below code will break... check in StarDAO.php ...
    // HINT: What does this method updateHeadline() expect as parameters?
    $status = $dao->updateHeadline(); // Get an Indexed Array of Star objects
}

?>
<html>
<body>
    <?php
        if( $status ) {
            // YOUR CODE GOES HERE

        }
        else {
            echo "<h1>Update was NOT successful!</h1>";
        }
    ?>
</body>
</html>