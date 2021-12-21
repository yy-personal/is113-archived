<?php

session_start();

// Form Processing
// Retrieve 'name' (passed from page1.php)
$name = $_POST['name'];

// Let's retrieve age Session Variable
$age = $_SESSION['age'];

?>
<html>
<body>

<h1>page2.php</h1>

<?php
    echo "
    Name: $name
    <br>
    Age: $age 
";
?>

</body>
</html>