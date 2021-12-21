<?php

$errors = []; // or $errors = array();

if( $_GET['msg'] == '' ){
    $errors[] = 'Why No Message?';
}
if( $_GET['num'] == '' ){
    $errors[] = 'Why No Number?';
}

# if( filter_var($_GET['num'], FILTER_VALIDATE_INT) == False ){ // An alternative
if ( !ctype_digit($_GET['num']) ){
    $errors[] = 'Num is not an Integer';
}

if( count($errors) > 0 ) {
    echo '<ol>';
    foreach($errors as $err) {
        echo "<li>$err</li>";
    }
    echo '</ol>';
}
else {
    $max_num = $_GET['num'];
    $msg = $_GET['msg'];
    if( $max_num > 0 ) {
        echo "<table border='1'>
                <tr>
                    <th>S/N</th>
                    <th>Message</th>
                </tr>
            ";
        for($i = 1; $i <= $max_num; $i++) {
            echo "
                <tr>
                    <td>$i</td>
                    <td>$msg</td>
                </tr>       
            ";
        }
        echo '</table>';
    }
}

?>