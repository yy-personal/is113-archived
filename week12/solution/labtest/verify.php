<?php

require_once 'include/GradeDAO.php';

session_start();

// Form Processing
$status = '';
if( isset($_POST['email']) && trim($_POST['email']) != '' ) {
    $email = $_POST['email'];

    // Check if this email is found in grade table
    $dao = new GradeDAO();
    $grade_object = $dao->retrieve($email);

    if( $grade_object != null ) {
        $status = $grade_object->getStatus();

        // If PASS
        // Forward to congrats.php
        if( $status == 'PASS' ) {
            // Store Session Variable
            $_SESSION['PASS'] = $email;
            header("Location: Congrats.php");
            return;
        }
        // If FAIL
        // Forward to SeeYouIn2020.php
        else {
            $_SESSION['FAIL'] = $email;
            header("Location: SeeYouAgain.php");
            return;
        }

    }
    else {
        $msg = "Unable to locate $email";
        // Store Session Variable
        $_SESSION['error'] = $msg;

        header("Location: search.php");
        return;
    }
}
else {
    // Illegal access to verify.php
    // Send user to search.php
    header('Location: search.php');
    return; // exit;
}

?>
<html>
<body>

    <?php
        if( $status != '' ) {
            echo "<h1>Lab Test 1: $status</h1>";
        }
    ?>

</body>
</html>