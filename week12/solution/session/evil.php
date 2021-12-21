<html>
<body>

<h1>evil.php</h1>

<?php

session_start();

// Display the session id
echo "<h2>Session ID: " . session_id() . "</h2>";
echo "<hr>";


// See what's inside $_SESSION variable
echo '<pre>';
var_dump($_SESSION);
echo '</pre>';


if( !isset($_SESSION['nuke']) ) {
    $_SESSION['nuke'] = 0;
}

if( !isset($_SESSION['leader']) ) {
    $_SESSION['leader'] = 'Kim Jong Un';
}

// Launch Nuke
$_SESSION['nuke']++;

echo '<hr>';
echo "You have launched " . $_SESSION['nuke'] . " nuke bombs so far!";

?>

</body>
</html>
