<?php

require_once 'Person.php';

$bogum = new Person(
    'Bogum', 'M', new Pet('Okja', 'Super Pig', 'Female', 3)
);

echo '<pre>';
var_dump($bogum);
echo '</pre>';

?>