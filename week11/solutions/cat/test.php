<?php

require_once 'Cat.php';

$cat1 = new Cat('Yimeng', 1, 'F', 'A');
//$cat1->getName();

$cat1 = new Cat('Layfoo', 9, 'M', 'P');

echo "First cat's name: " . $cat1->getName() . '<br>';
echo "Age is: " . $cat1->getAge() . '<br>';

if( $cat1->getGender() == 'F' ) {
    echo "Ohh it's a girl cat<br>";
}
else {
    echo "Boy cats pee everywhere!<br>";
}

?>