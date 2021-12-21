<?php
class Person{
    ##Declaration of person 'stats'##
    public $name;
    public $age;


    function __construct($name, $age)
    {
        $this -> name = $name;
        $this -> age = $age;
    }

    function isOld(){
        return $this->age > 75;
    }

}

?>