<?php

if( !isset($_POST['stars']) ) {
    echo 'OMG nobody selected';
}
else {
    $stars = $_POST['stars']; # stars array

    foreach($stars as $star) {
        echo "<img src='images/$star.jpg'> ";
    }
}

?>