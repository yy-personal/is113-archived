<?php
//Check to see if there is an existing session
// 1) if no session, then create new session.
// 2) if EXISTING session, then CONTINUE to use it.
session_start();

// age 25
// Create a new session variable
// key: 'age'
// value: 25
// $_POST, $_GET --> Associative Array
// $_POST['age'] = 25;
$_SESSION['age'] = 25;
$_SESSION['name'] = 'Bob';
// Any PHP page in this session can access this.
var_dump($_SESSION);

?>

<html>
<body>

<h1>page1.php</h1>
<form action="page2.php">

    <input type="submit" value = >

</form>

</body>
</html>