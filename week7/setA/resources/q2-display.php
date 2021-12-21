<?php
/* 
    Name:  
    Email: 
*/
// var_dump($_POST);
$fruits = [];
if (isset($_POST["fruit"])){
    $fruits = $_POST["fruit"];
    // var_dump($fruits);
}
else{
    echo "<h1>Please select a fruit</h1>";
}

?>
<html>
<body>
    
    <table border="1">
    <?php
    
    foreach($fruits as $num => $fruit){
        echo "<tr>";
        echo "<td><img src='./$fruit.jpg'></td>";
        echo "</tr>";
    }
    
    ?>
    </table>
    
</body>
</html>