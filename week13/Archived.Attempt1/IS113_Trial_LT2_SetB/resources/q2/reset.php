<?php

/*
    Name:

    Email:
*/

require_once 'include/common.php';

// an array of error messages (if any)
$errors = [];
$username = $_POST['username'];
$current_password = $_POST['current_password'];
$new_password = $_POST['new_password'];

if(($username)==''){
  $errors[] = 'Username field is empty.';
}
if(($current_password)==''){
  $errors[] = 'Current password field is empty.';
}
if(($new_password[0])==''){
  $errors[] = 'New password field is empty';
}
if(($new_password[1])==''){
  $errors[] = 'Verify new password field is empty';
}

if(count($errors)>0){
  $_SESSION['errors'] = $errors;
  header("Location: reset-view.php");
  return;
}
// Get username and password from FORM submission
// Code here
// var_dump($_POST);
$dao = new AccountDAO();
$authentication = $dao->authenticate($username, $current_password);
if($dao->retrieve($username)==False){
  $errors[] = 'Username does not exist.';
  $_SESSION['errors'] = $errors;
  header("Location: reset-view.php");
  return;
}
$user_info = $dao->retrieve($username);
$user_id = $user_info->getId();

if($authentication == False){
  $errors[] = 'Wrong username/password';
  $_SESSION['errors'] = $errors;
  header("Location: reset-view.php");
  return;
}
if($new_password[0]!==$new_password[1]){
  $errors[] = 'Your new passwords do not match.';
  $_SESSION['errors'] = $errors;
  header("Location: reset-view.php");
  return;
}
$password_reset = $dao->reset_password($user_id, password_hash($new_password[0], PASSWORD_DEFAULT) );
if($password_reset){
  echo "Success!";
}
else{
  $errors[] = 'Password rerset was NOT successful';
  $_SESSION['errors'] = $errors;
  header("Location: reset-view.php");
  return;
}


?>
<!-- <html>
<head>
  <title>Reset</title>
</head>
<body>
Success!
</body>
</html> -->
