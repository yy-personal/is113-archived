<?php

session_start();

// Save age as a Session Variable
$_SESSION['age'] = 25;

?>
<html>
<body>

<h1>page1.php</h1>

<form action='page2.php' method='POST'>

    Name: <input type='text' name='name'> <br>
    <input type='submit' value='Next'>

</form>

</body>
</html>