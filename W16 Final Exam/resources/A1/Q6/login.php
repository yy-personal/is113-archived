<?php

require_once 'common.php';

$errors = [];

if( isset($_GET['username']) && isset($_REQUEST['password']) ) {
    $username = $_GET['username'];
    $password = $_REQUEST['password'];

    $dao = new UserDAO();
    $user = $dao->get($userName);

    if( $user !== false || password_verify($password, $user->getPasswordHash()) ) {

        if( $user->getEmployeeType() == 'management' ) {
            $url = 'management_main.php';
        }
        if( $user->getEmployeeType() == 'normal' ) {
            $url = 'normal_main.php';
        }
        else {
            $errors[] = 'Access denied';
        }
    }
    else {
        $errors[] = 'Login fails';
    }
}

// If there are errors
if( empty($errors) ) {
    $_SESSION['user'] = $user;
}
else {
    $_SESSION['errors'] = $errors;
    $url = 'index.php';
}

// redirect to target page

location( $url );
exit;

?>