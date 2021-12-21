<?php

//var_dump($_POST);

$errors = [];

$check_lose = '';
$check_find = '';
$check_build = '';

$option_men = '';
$option_women = '';
$option_anything = '';

// form submission happened?
if( isset($_POST['signup'])) {

    if( !isset($_POST['reasons']) ) {
        $errors[] = "Must select reason(s)";
    }
    else { // User chose 1 or more checkbox options
        $reasons = $_POST['reasons']; // an Array
        foreach($reasons as $reason) {
            if( $reason == 'Lose Weight' )
                $check_lose = 'checked';
            else if( $reason == 'Find Love' )
                $check_find = 'checked';
            else if ( $reason == 'Build Muscles' )
                $check_build = 'checked';
        }
    }

    if( !isset($_POST['type']) ) {
        $errors[] = "Must select type";
    }
    else {
        $type = $_POST['type']; // STRING
        if( $type == 'men')
            $option_men = 'checked';
        else if( $type == 'women' )
            $option_women = 'checked';
        else if( $type == 'anything' )
            $option_anything = 'checked';
    }

    if( count($errors) == 0 ) {
        header('Location: thankyou.php');
    }
}
?>

<html>
<body>
    <h1>Krazy Gym</h1>
    <form action='signup2.php' method='POST'>

        <?php
            if( count($errors) > 0 ) {
                echo '<ul>';
                foreach($errors as $err) {
                    echo "<li>$err</li>";
                }
                echo '</ul>';
            }
        ?>

        Reason for joining (must select at least ONE):<br>
        <input type='checkbox' name='reasons[]' value="Lose Weight" <?= $check_lose; ?>> Lose Weight<br>
        <input type='checkbox' name='reasons[]' value="Find Love" <?= $check_find; ?>> Find Love<br>
        <input type='checkbox' name='reasons[]' value="Build Muscles" <?= $check_build; ?>> Build Muscles<br><br>

        Gym type (must select at least ONE):<br>
        <input type='radio' name='type' value='men' <?= $option_men; ?>> Men only<br>
        <input type='radio' name='type' value='women' <?= $option_women; ?>> Women only<br>
        <input type='radio' name='type' value='anything' <?= $option_anything; ?>> Anything<br><br>

        <input type='submit' name='signup'>

    </form>
</body>
</html>