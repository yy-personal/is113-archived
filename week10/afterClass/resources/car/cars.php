<?php
require_once "Car.php";
// Make new Car objects

$cars = [
    new Car(2008,'Honda','Fit',7),
    new Car(2016,'Hyundai','Sonata',6),
    new Car(2000,'Toyota','Corolla',6),
];
var_dump($cars);
/*

// We USED TO use Associative Array...
// to represent and store "things" (e.g. objects).
$cars = [
            [   "year"   => 2008,
                "make"   => 'Honda',
                "model"  => 'Fit',
                "rating" => 7 ],

            [   "year"   => 2016,
                "make"   => 'Hyundai',
                "model"  => 'Sonata',
                "rating" => 6 ],

            [   "year"   => 2000,
                "make"   => 'Toyota',
                "model"  => 'Corolla',
                "rating" => 6 ]
];
*/

?>