<?php

require_once 'include/GradeDAO.php';

session_start();

if( isset($_SESSION['FAIL']) ) {
    $email = $_SESSION['FAIL'];

    // Once retrieve, remove it
    unset($_SESSION['FAIL']);

    $dao = new GradeDAO();
    $components = $dao->retrieveComponents($email);
}
else {
    header('Location: search.php');
    return;
}
?>
<html>
<body>

    <h1>OH MY GOD! You failed Lab Test 1!</h1>
    <h1>See you again NEXT YEAR!</h1>
    <h2>Your email <?= $email ?> has been added to the repeat students list!</h2>

    <hr>
    Back to <a href='search.php'>Search</a>

</body>
</html>