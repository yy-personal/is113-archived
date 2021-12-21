<?php
// extra.php

session_start();

if (isset($_SESSION['forrest'])) {
    unset($_SESSION['forrest']);
}

if (isset($_SESSION['forrest_gf'])) {
    $_SESSION['forrest_gf'] = 'nobody';
}

echo "Forrest wanna marry {$_SESSION['forrest_gf']}"; 

?>
