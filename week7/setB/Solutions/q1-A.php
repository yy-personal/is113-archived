<?php

$messages = [
    "trump"   => "Make America Great Again",
    "clinton" => "More Women in Office",
    "kim"     => "Nukes Fly High and Far",
    "moon"    => "One Korea One People"
];

$msg = '';
if( !isset($_POST['person']) ) {
    $msg = 'You must select a person!';
}
else {
    $person = $_POST['person'];
}

?>
<!DOCTYPE html>
<html>
<body>
    <?php
        if( $msg != '' ) {
            echo "<h1>$msg</h1>";
        }
        else {
            echo "<h1>$messages[$person]</h1>";
            echo "<img src='$person.jpg'>";
        }
    ?>
</body>
</html>