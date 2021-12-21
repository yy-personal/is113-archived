<?php
// display.php

session_start();

$_SESSION['forrest_gf'] = 'Jenny';

header('Location: extra.php');

?>
