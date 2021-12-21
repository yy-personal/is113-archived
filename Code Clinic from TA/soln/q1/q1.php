<?php

$jokeArr = [
    [
        "joke" => "Are you a PHP form?",
        "answer" => 'Cause I totally $_GET you.'
    ],
    [
        "joke" => 'Do you have a heart?',
        "answer" => 'Because I think you are empty() inside'
    ],
    [
        "joke" => 'Are you a form input?',
        "answer" => 'Cause I"d SUBMIT to you...just kidding HELL no'
    ],
    [
        "joke" => 'Did you listen to prof?',
        "answer" => 'Because you shouldn"t make her str_repeat() herself'
    ],
    [
        "joke" => 'Are you pissed off?',
        "answer" => 'Because you look like you"re about to explode($brain).'
    ],
    [
        "joke" => 'Are you ready for Lab Test?',
        "answer" => 'Because it looks like you"re isSET() for success!'
    ],
    [
        "joke" => 'Are you doing well in SMU?',
        "answer" => 'Because if you dont, you gonna get $_POSTed out.'
    ]
];

function getRandomIndex($arr) {
    // This function returns a random integer (based on the length of $jokeArr).
    $number = rand(0,count($arr)-1);
    return $number;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 1 Answer</title>
</head>
<body>
    <?php

        $num = getRandomIndex($jokeArr);
        echo "<h1>{$jokeArr[$num]['joke']}</h1>";
        echo "<h2>{$jokeArr[$num]['answer']}</h2>";


    ?>
    
</body>
</html>