<?php

// YOUR CODE GOES HERE
$msg = $_GET['msg'];
$num = $_GET['num'];


if ($msg == "" and $num==""){
    echo '1. Why no Message? <br>';
    echo '2. Why no number?';
}
elseif($msg == ""){
    echo '1. Why no message?';
}
elseif($num == ""){
    echo '1. Why no number?';
}
elseif(is_numeric($num)==false){
    echo '1. Num is not an integer';
}
else{
    echo "<table border='1'>";
    echo    '<tr>';
    echo    '<th>S/N</th>';
    echo    '<th>Message</th>';
    echo '</tr>';
    for($i=1 ; $i<=$num ; $i++){
        echo '<tr>';
        echo '<td>';
        echo $i;
        echo '</td>';
        echo '<td>';
        echo $msg;
        echo '</td>';
        echo '</tr>';
    }
}
?>
