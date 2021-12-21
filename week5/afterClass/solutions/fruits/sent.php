<?php
// echo "You chose: " . $_GET['fruit'] . "<br>";
// echo "Quantity: " . $_GET['quantity'];

// $fruits = [ 'apple' => 2,
//             'orange' => 3,
//             'pear' => 5 ];

// if( isset($fruits['apple']) )
//     echo 'Got apples';
// else
//     echo 'No apples';


// if( isset($fruits['mango']) )
//     echo 'Got mangos';
// else
//     echo 'No mangos';

// if( isset($_GET['quantity']) )
//     echo 'Got quantity';
// else
//     echo 'No quantity';

// if( isset($_GET['fruit']) )
//     echo 'Got fruit';
// else
//     echo 'No fruit';

if( !isset($_GET['fruit']) ) {
    echo 'Must select fruit';
}
else {
    $fruit = $_GET['fruit']; # fruit name
    $quantity = $_GET['quantity'];

    $image_src = 'images/' . $fruit . '.jpg';
    for($i = 0; $i < $quantity; $i++) {
        echo "<img src='$image_src'> ";
    }
}


?>