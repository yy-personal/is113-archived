<?php
require_once 'include/common.php';

$dao = new AccountDAO();
// $dao->retrieve('john');
var_dump($dao->retrieve('john'));


var_dump($dao->reset_password(3, password_hash('newpasslmao', PASSWORD_DEFAULT )));
?>