<?php

// DO NOT MODIFY THIS ARRAY
$prizeArr = [
    [
        "number" => 1,
        "prizes" => ["Big Dog","$500","Chicken"]
    ],
    [
        "number" => 2,
        "prizes" => ["Elise","$100","Soup"]
    ],
    [
        "number" => 3,
        "prizes" => ["Shine Korea Drink","Tea"]
    ],
    [
        "number" => 4,
        "prizes" => ["Jennifer Lawrence's toenail","Salad","Toilet Paper"]
    ],
    [
        "number" => 5,
        "prizes" => ["Naruto's Book","$250,000","Hairpin"]
    ],
    [
        "number" => 6,
        "prizes" => ["Sally","Sean Choon","Hayley Steinfield"]
    ],
    [
        "number" => 7,
        "prizes" => ["A fat rock"]
    ],
    [
        "number" => 8,
        "prizes" => ["Nothing but a rat"]
    ],
];

// Form Validation
$num = $_POST['num'];

if (!ctype_digit($num)) {
    echo "<h1>Please enter a valid positive integer</h1>";
}
else {
    $gotPrize = False;
    foreach ($prizeArr as $prizeList) {
        if ($num == $prizeList['number']) {
            echo "
            <h1>Congratulations, you have won the following prizes:</h1>";

            echo "<ol>";
            foreach ($prizeList['prizes'] as $prize) {
                echo "
                <li>$prize</li>";
            }
            echo "
            </ol>";
            $gotPrize = True;

        }
    }
    if (!$gotPrize) {
        echo "<h1>Sorry, your number didn't win anything!</h1>";
    }
}

?>