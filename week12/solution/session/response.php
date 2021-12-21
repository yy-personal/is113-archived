<html>
<body>

<h1>response.php</h1>


<?php

session_start();

// See what's inside $_SESSION variable
echo '<pre>';
var_dump($_SESSION);
echo '</pre>';

// If there is no Session Variable called 'count' existing
// Create a new Session Variable
// Set the count value to 0
if( !isset($_SESSION['count']) ) {
    $_SESSION['count'] = 0;
}

// Increment the count by 1 each time response.php is viewed/accessed.
$_SESSION['count']++;

echo '<hr>';

echo "You have accessed response.php " . $_SESSION['count'] . " times";

?>

</body>
</html>