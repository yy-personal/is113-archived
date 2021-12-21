<html>
<body>

<h1>good.php</h1>

<?php

// YOUR CODE GOES HERE
session_start();
// unset($_SESSION['nuke']);
session_unset(); //remove all session variable.
var_dump($_SESSION);
echo "<hr>";
$session_id = session_id();
echo "<h3>BEFORE destroy, session ID: $session_id</h3>";

session_destroy(); //Cannot just destroy as need to clear up the memory spaces.

echo "<hr>";
$session_id = session_id();
echo "<h3>BEFORE destroy, session ID: $session_id</h3>";
?>

</body>
</html>