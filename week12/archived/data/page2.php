<?php
session_start();
var_dump($_SESSION);
// Form Processing
// Retrieve 'name' & 'age'
$name = $_SESSION['name'];
$age = $_SESSION['age'];
// YOUR CODE GOES HERE

?>
<html>
<body>

<h1>page2.php</h1>

<?php
    // YOUR CODE GOES HERE
    echo "Name: $name <br>"; 
    echo "Age: $name";
?>

</body>
</html>