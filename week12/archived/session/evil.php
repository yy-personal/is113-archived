<html>
<body>

<h1>evil.php</h1>

<?php

    session_start();

    $session_id = session_id(); //Not Tested
    echo "<h3>Session ID: $session_id</h3>";
    echo "<br>";

    //1. First time evil.php is called
    if(!isset($_SESSION['nuke'])){
        $_SESSION['nuke'] = 0;
    }
    //2. Subsequent time
    
    //3. Increment # of nuke bombs.
    $_SESSION['nuke']++;
    echo "You launched ".$_SESSION['nuke']." nuke bombs!";

    var_dump($_SESSION);
?>

</body>
</html>
