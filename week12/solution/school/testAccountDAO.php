<?php

require_once 'include/AccountDAO.php';

$dao = new AccountDAO();

// Test 1 - selena/selena123 (Correct username/password)
echo '<hr>';
$username = 'selena';
$password = 'selena123';
echo "<h1>Authenticate $username/$password (TRUE)</h1>";
var_dump( $dao->authenticate($username, $password) );

// Test 2 - selena/12345 (Incorrect username/password)
echo '<hr>';
$username = 'selena';
$password = '12345';
echo "<h1>Authenticate $username/$password (FALSE)</h1>";
var_dump( $dao->authenticate($username, $password) );

?>