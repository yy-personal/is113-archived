<?php
/* 
    Name:  
    Email: 
*/
$form_submitted = false;
// var_dump($_POST);
$fruits = [];

if (isset($_POST['send'])){
    $form_submitted = true;
    if (isset($_POST["fruit"])){
        $fruits = $_POST["fruit"];
        // var_dump($fruits);
        $num_fruits = count($fruits);
        if($num_fruits==1){
            echo "<h1>You selected 1 fruit</h1>";
        }
        else{
            echo "<h1>You selected $num_fruits fruit</h1>";
        }
    }
    else{
        echo "<h1>Please select a fruit</h1>";
    }
}
// var_dump($form_submitted);


?>

<html>
<body>
    
    
    <?php
    if($form_submitted == true & $fruits != []){
    ?>

    <table border="1">

    <?php
        foreach($fruits as $num => $fruit){
            echo "<tr>";
            echo "<td><img src='./$fruit.jpg'></td>";
            echo "</tr>";
        }
    ?>

    </table>

    <?php
    }
    ?>
    
    
</body>
</html>

<html>
<body>
    <?php
    ?>
    <form method='post' action='q2-one.php'>
        <input type="checkbox" value="apple" name="fruit[]"> <label for="Apple">Apple</label> 
        <input type="checkbox" value="orange" name="fruit[]"><label for="Orange">Orange</label> 
        <input type="checkbox" value="pear" name="fruit[]"><label for="Pear">Pear</label> 
        <br>
        <input type='submit' name='send'>
    </form>
</body>
</html>