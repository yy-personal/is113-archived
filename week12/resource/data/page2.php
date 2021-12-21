<?php
// Form Processing
// Retrieve 'name' & 'age'
// YOUR CODE GOES HERE
// var_dump($_POST);
// var_dump($_GET);
// $name = $_POST['name'];
// $age = $_POST['age'];
// $name = $_GET['name'];
// $age = $_GET['age'];
session_start();
var_dump($_SESSION);

?>
<html>
<body>

<h1>page2.php</h1>

<?php
    // YOUR CODE GOES HERE
    echo "{$_SESSION['age']}";
?>

</body>
</html>