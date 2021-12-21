<?php

$errors = [];
#var_dump($_POST);

# Check if name not entered
if (empty($_POST['name'])) {
    $errors[] =  "You didn't tell me your name!";
}

# Check if age not entered
if (empty($_POST['age'])) {
    $errors[] = "You never say your age!";
}

# Check if gender
if (!isset($_POST['gender'])) {
    $errors[] = "You didn't pick your gender!";
}

if (count($errors) > 0) {
    echo "
    <ul>";
    foreach ($errors as $error) {
        echo "
        <li>$error</li>";
    }
    echo "
    </ul>";
}
else {
    # Process the hello msg.
    $gen = '';
    if ($_POST['gender'] == 'male') {
        $gen = 'boy';
    }
    else {
        $gen = 'girl';
    }
    echo "Hi there " . $_POST['name'] . " it's nice to meet a $gen like you <br>";
    echo "You are " . $_POST['age'] . "? ";

    if ($_POST['age'] > 30) {
        echo "Wow, you are so OLD!";
    }
    else {
        echo "So young ah!";
    }
}


?>