<?php
var_dump($_GET); //if use radio, submitting empty string will not be captured unlike what we have right now.

//case 1 (good case)
//user keyed in fullname value
//retrieve it.

if(isset($_GET['fullname'])){
    echo "Form submission happened <br>";
    $fullname = $_GET['fullname'];
}
else{
    echo "I'm loading this page for the first time<br>";
    echo "I'm NOT here because form submission happened";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Saturday</title>
</head>
<body>
    <h1>Saturday Class Sucks</h1>
    <?php
    if(isset($fullname)){
        echo "
        <h2>Hello, $fullname</h2>
        <h3>Sorry we're having Sat class!</h3>
        ";
    }
    ?>

    <form action="sucks.php" method="GET">

    Fullname:
    <input type="text" name = "fullname">

    <br><br>
    <input type="submit" value="Get Greeting">
</body>
</html>