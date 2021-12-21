<?php

require_once 'include/common.php';

// Get username and password from FORM submission
$username = $_POST['username'];
$password = $_POST['password'];

// Use MemberDAO to check whether $username is found in Member table
// If so, display "User found $username!"
$dao = new AccountDAO();
$message = 'Access Denied';
if( $dao->authenticate($username, $password) ) {
  $message = 'Login successful!';
  $_SESSION['uname'] = $username;
  header('Location: home.php');
  return;
}

?>

<html>
    <body>
<?php
    echo "<h1>$message</h1>";
?>
    </body>
</html>
