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
var_dump($_POST);
if (isset($_POST['persons'])){
    $person_list = $_POST['persons'];
    // echo "<h1>$messages[$person]</><br>";
    // echo "<img src='./$person.jpg'>";
}
else{
    echo "<h1>You must select a person!</>";
}
?>
<!DOCTYPE html>
<html>
<body>
<table border="1">

<tr>
    <th><h1>Photo</h1></th>
    <th><h1>Message</h1></th>
</tr>

    <?php
        foreach($person_list as $person){
            echo "
            <tr>
            <td><img src='./$person.jpg'></td>
            
            <td><h1>$messages[$person]</><br></td>
            </tr>
            ";
        }
    ?>


</table>
</body>
</html>