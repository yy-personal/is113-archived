<?php
    session_start();
    if(!isset($_SESSION['count'])){
        $_SESSION['count'] = 0;
    }
    $_SESSION['count']++;
    var_dump($_SESSION);
?>

<html>
<body>

<h1>evil.php</h1>

<?php

// YOUR CODE GOES HERE
echo "{$_SESSION['count']} nukes launched!"
?>

</body>
</html>
