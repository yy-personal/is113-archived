<html>
<body>

<h1>good.php</h1>


<?php

session_start();

// Display the session id
echo "<h2>Session ID: " . session_id() . "</h2>";
echo "<hr>";


// Before unsetting all Session Variables
echo "<h2>Before unsetting all Session Variables</h2>";
echo '<pre>';
var_dump($_SESSION);
echo '</pre>';
echo '<hr>';



// Remove a specific Session Variable, e.g. nuke
unset($_SESSION['nuke']);

// After unsetting all Session Variable
echo "<h2>After unsetting Session Variable 'nuke'</h2>";
echo '<pre>';
var_dump($_SESSION);
echo '</pre>';
echo '<hr>';




// Remove all Session Variables
// This deletes only the variables from session.
// The session still exists!
session_unset();
//$_SESSION = []; // This also works!

// After unsetting all Session Variable
echo "<h2>After unsetting all Session Variables</h2>";
echo '<pre>';
var_dump($_SESSION);
echo '</pre>';
echo '<hr>';





// Display the session id
echo "<h1>Is the Session still alive? YES</h1>";
echo "<h2>Session ID: " . session_id() . "</h2>";
echo "<hr>";

// This destroys all of the data associated with the current session.
// It does NOT unset any of the global variables associated with the session
//     or unset the session cookie.
echo "<h1>Is the Session still alive? NO</h1>";
session_destroy();
echo "<h2>Session ID: " . session_id() . "</h2>";
echo "<hr>";

?>

</body>
</html>