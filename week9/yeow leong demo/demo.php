<?php

/*
Capture a Person
-> name
-> age
*/

// $first = ['apple', 3];
// $second = ['orange', 93];

##requice_once need to be imported before calling the person below.
// require_once 'person.php';

##instead of using 'require_once' for each new class, we can use function below.
##So when the script detect any new xxxxxx, like in this case "Person", it will auto invoke myautoloader and call classes themself.
// spl_autoload_register("myautoloader");

// function myautoloader($classname){
//     require_once "$classname.php";
// }
##use below for simplified code.
spl_autoload_register(
    function ($classname){
        require_once "{$classname}.php";
    }
);
##if the said class are in other folder, specify the directory.
// spl_autoload_register(
//     function ($classname){
//         require_once "xxxx/{$classname}.php";
//     }
// );

// $first = new Person();
// $first->name = 'apple';
// $first->age = '3';

// $second = new Person();
// $second->name = 'orange';
// $second->age = '93';

$first = new Person('apple', 2);
$second = new Person('orange', 93);

$persons = [$first, $second];

echo "name is: {$persons[0]->name} <br>" ;
echo "age is : {$persons[0]->age} <br>";

if ($persons[0]->isOld()){
    echo "name is: {$persons[0]->name} is old.<br>" ;
}
else{
    echo "name is: {$persons[0]->name} is young.<br>" ;
}

echo "name is: {$persons[1]->name} <br>" ;
echo "age is : {$persons[1]->age} <br>";
if ($persons[1]->isOld()){
    echo "name is: {$persons[1]->name} is old.<br>" ;
}
else{
    echo "name is: {$persons[1]->name} is young.<br>" ;
}


?>