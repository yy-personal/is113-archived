<?php

/*
    Name:

    Email:
*/

require_once 'include/common.php';

// an array of error messages (if any)
$errors = [];
var_dump($_POST); //new password is an array.
if(($_POST['username'])==''){
  $errors[] = 'Username field is empty.';
}
if($_POST['current_password']==''){
  $errors[] = 'Current password field is empty.';
}

if($_POST['new_password'][0]==''){
  $errors[] = 'New password field is empty';
}
if($_POST['new_password'][1]==''){
  $errors[] = 'Verify new password field is empty';
}

// var_dump($errors);
if(count($errors)>0){
  $_SESSION['my-errors'] = $errors;
  header('Location: reset-view.php');
  return;
}

// Get username and password from FORM submission
$reset_username = $_POST['username'];
$reset_current_PW = $_POST['current_password'];
$reset_new_PW = $_POST['new_password'][0];
$reset_new_PW_confirm = $_POST['new_password'][1];
$dao = new AccountDAO();
$authentication = $dao->authenticate($reset_username,$reset_current_PW);
$user_info = $dao->retrieve($reset_username);
if(!$user_info){
  $errors[]='Username does not Exist';
  $_SESSION['my-errors'] = $errors;
  header('Location: reset-view.php');
  return;
}

if(!$authentication){
  $errors[]='wrong username/password';
  $_SESSION['my-errors'] = $errors;
  header('Location: reset-view.php');
  return;
}
if($reset_new_PW!==$reset_new_PW_confirm){
  $errors[]='Your new password do not match.';
  $_SESSION['my-errors'] = $errors;
  header('Location: reset-view.php');
  return;
}

$user_id = $user_info->getId();
$reset_password = $dao->reset_password($user_id, $reset_new_PW);
if($reset_password){
  echo "Success!";
}
else{
  $errors[]='Password reset was NOT successful';
  $_SESSION['my-errors'] = $errors;
  header('Location: reset-view.php');
  return;
}

?>
<html>
<head>
  <title>Reset</title>
</head>
</html>
