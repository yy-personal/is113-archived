<?php

require_once 'include/common.php';

$errors = [];

// Get username and password from FORM submission
$username = $_POST['username'];
$current_password = $_POST['current_password'];
$new_password = $_POST['new_password'];

if( $username == '' ) {
  $errors[] = 'Username field is empty';
}
if( $current_password == '' ) {
  $errors[] = 'Current Password field is empty';
}
if( $new_password[0] == '' || $new_password[1] == '') {
  $errors[] = 'New Password field(s) are empty';
}

if( count($errors) > 0 ) {
  $_SESSION['errors'] = $errors;
  header('Location: reset-view.php');
  exit;
}

// Use MemberDAO to check whether $username is found in Member table
// If so, display "User found $username!"
$dao = new AccountDAO();

// Question 2 - Part B
// [TODO] Code here. If the authentication fails,
// -- Re-direct the user back to reset-view.php so that it (reset-view.php) can display appropriate error message.
if( !$dao->authenticate($username, $current_password) ) {
  $errors[] = 'Authentication failed. Username/Password is incorrect.';
  $_SESSION['errors'] = $errors;
  header('Location: reset-view.php');
  exit;
}

// Question 2 - Part B
// [TODO] Code here. Verify that the new passwords (typed twice by the user) match.
// Only if the new passwords match, then proceed to update_password() in AccountDAO.php.
if( $new_password[0] != $new_password[1] ) {
  $errors[] = 'Your new passwords do NOT match.';
  $_SESSION['errors'] = $errors;
  header('Location: reset-view.php');
  exit;
}

// Question 2 - Part B
// [TODO] Code here. Call reset_password method in Account.php.
// Upon successful password reset, re-direct the user to login-view.html.
$dao->reset_password($dao->retrieve($username)->getId(), $new_password[0]);
header('Location: login-view.html');

?>
