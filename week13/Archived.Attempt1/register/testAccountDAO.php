<?php

require_once 'include/AccountDAO.php';

$dao = new AccountDAO();

$username = 'selena';
$password = $dao->getPassword($username);
var_dump($password);

?>