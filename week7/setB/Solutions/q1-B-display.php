<?php

$messages = [
    "trump"   => "Make America Great Again",
    "clinton" => "More Women in Office",
    "kim"     => "Nukes Fly High and Far",
    "moon"    => "One Korea One People"
];

$msg = '';
if( !isset($_POST['people']) ) {
    $msg = 'You must select at least one person!';
}
else {
    $people = $_POST['people'];
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
            echo "
                <table border='1'>
                    <tr>
                        <th>Photo</th>
                        <th>Message</th>
                    </tr>
            ";

            foreach($people as $person) {
                echo "
                    <tr>
                        <td><img src='$person.jpg'></td>
                        <td>$messages[$person]</td>
                    </tr>";
            }
            echo '</table>';
        }
    ?>
</body>
</html>