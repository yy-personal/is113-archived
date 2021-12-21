<?php

var_dump($_POST);

// form processing
// input validation
$errors = [];
// you may find it 'useful/easier' to have these two arrays
$join_reasons = [ "Lose Weight", "Find Love", "Build Muscles" ];
$gym_types = [ 
    'men' => 'Men only',
    'women' => 'Women only',
    'anything' => 'Anything'
];

// 1. initialize for first time loading of the page
$type = ''; 
$user_reasons = []; 

// 2. logic
if ( isset($_POST['signup'])) { // user clicks submit button

    // isset($_POST['reasons']):  does $_POST has key 'reason'
    if ( isset($_POST['reasons'])) { // yes
        $user_reasons = $_POST['reasons']; // array
    } else { // no
        $errors[] = 'Select reasons!';
    }

    if ( isset($_POST['type'])) {
        $type = $_POST['type'];
    } else {
        $errors[] = 'Select type!';
    }

    if ( count($errors) == 0 ) { // no error
        header('Location: thankyou.php');
    }

}
// 3. display HTML + variables
?>
<html>
<body>
    <h1>Krazy Gym</h1>
    <form action='signup.php' method='POST'>

        <ul>
            <?php
            foreach ($errors as $err) {
                echo "
                    <li>$err</li>
                ";
            }
            ?>
        </ul>

        Reason for joining (must select at least ONE):<br>
        <?php
        foreach ($join_reasons as $reason) {
            // logic: decide did user tick this check box?            
            if ( in_array($reason, $user_reasons) ) {
                $checked = 'checked';
            } else {
                $checked = '';
            }
            // display
            echo "
                <input type='checkbox' name='reasons[]' 
                    value='$reason' $checked> $reason<br>            
            ";
        }
        ?>
        Gym type (must select at least ONE):<br>
        <?php
            foreach ($gym_types as $key => $value) {
                // logic: decide did user tick this radio button?
                if ( $type == $key ) {
                    $checked = 'checked';
                } else {
                    $checked = '';
                }
                // display
                echo "
                <input type='radio' name='type' value='$key' $checked > 
                    $value<br>
                ";
            }
        ?>
        <br>
        <input type='submit' name='signup'>

    </form>
    
</body>
</html>