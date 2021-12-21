<?php

// Form Processing
// Retrieve 'name' & 'age'
$name = $_GET['name'];
$age = $_GET['age'];

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