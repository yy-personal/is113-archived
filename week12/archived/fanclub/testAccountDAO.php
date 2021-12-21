<?php

require_once 'include/AccountDAO.php';
$dao = new AccountDAO();

echo '<hr>';
$username = 'selena';
$password = 'selena123';
echo "<h1>Verify Password for $username</h1>";
$hashed_password = $dao->getHashedPassword($username);
if( password_verify($password, $hashed_password) ) {
    echo "Password <b>$password</b> matches hashed password <b>$hashed_password</b>";
}
else {
    echo "$username's password cannot be authenticated!";
}

?>