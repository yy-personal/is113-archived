<?php
/* 
    Name:  
    Email: 
*/

$people = [
    "trump"    => 'Donald Trump',
    "clinton"  => 'Hillary Clinton',
    "kim"      => 'Kim Jong Un',
    "moon"     => 'Moon Jae In',
    "putin"    => 'Vladimir Putin'
];
$user_people = [];
// var_dump($user_people);
$board_people = [];
if(isset($_POST['submit'])){
    if(isset($_POST['user_people'])){
        $user_people = $_POST['user_people'];
        if(count($user_people)<3){
            echo "<b>Select at least 3 people!</b>";
        }
        else{
            $board_people=$user_people;
        }
        
    }
    else{
        echo "<b>You didn't select anyone! Select at least 3 people!</b>";
    }
    
}
var_dump($user_people);
?>
<!DOCTYPE html>
<html>
<body>
    <form method='post' action='q3.php'>
        <table border="1">
            <tr>
                <th>Person</th>
            </tr>
            
            <?php
                foreach($people as $key=>$value){
                    $checked = "";
                    if(in_array($key, $user_people)){
                        $checked = "checked";
                    }
                    echo "<tr>";
                    echo "<td>";
                    echo "<label><input type='checkbox' name='user_people[]' value='$key' $checked>$value</label>";
                    echo "</td>";
                    echo "</tr>";
                }
          
            ?>
            <tr>
            <td><input type="submit" value="Submit" name="submit"></td>
            </tr>
            
        </table>
    </form>
</body>
</html>