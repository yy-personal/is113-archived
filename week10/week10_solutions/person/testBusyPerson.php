<?php

require_once 'BusyPerson.php';

$bogum = new BusyPerson(
    'Bogum', 'M', 
        [
            new Pet('Okja', 'Super Pig', 'Female', 3),
            new Pet('Bong', 'Rat', 'Male', 1)
        ]
);

echo '<pre>';
var_dump($bogum);
echo '</pre>';

echo '<pre>';
var_dump($bogum->getPets());
echo '</pre>';

echo '<pre>';
var_dump($bogum->greet());
echo '</pre>';


?>