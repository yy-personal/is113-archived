<?php
/* 
    Name:  
    Email: 
*/

$messages = [
    "trump"   => "Make America Great Again",
    "clinton" => "More Women in Office",
    "kim"     => "Nukes Fly High and Far",
    "moon"    => "One Korea One People"
];

// var_dump($_POST);
if (isset($_POST['person'])){
    $person = $_POST['person'];
    echo "<h1>$messages[$person]</><br>";
    echo "<img src='./$person.jpg'>";
}
else{
    echo "<h1>You must select a person!</>";
}

?>
<!DOCTYPE html>
<html>
<body>
    
</body>
</html>