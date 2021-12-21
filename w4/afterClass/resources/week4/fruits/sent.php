<?php

// YOUR CODE GOES HERE
// var_dump($_GET);

$q = $_GET['quantity'];

//Fruit below
if(isset($_GET['fruit'])){
    $fruit = $_GET['fruit'];
}
else{
    $fruit = '';
}
//Fruit above


if($fruit==''){
    echo "Please select fruit";
}

else{
    for($i=0; $i < $q; $i++){
        echo "<img src='./images/$fruit.jpg'>";
    }
}

?>