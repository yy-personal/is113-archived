<?php

session_start();
var_dump($_SESSION);

//Do this only if this is the first time user is loading response.php
//Do this only when $_SESSION does NOT yet have 'count'.
if(!isset($_SESSION['count'])){
    $_SESSION['count'] = 0;
}

$_SESSION['count']++;

echo "<h3>AFTER incrementing count</h3>";
var_dump($_SESSION['count']);
?>

<html>
<body>

<h1>response.php</h1>

<?php

// YOUR CODE GOES HERE

?>

</body>
</html>