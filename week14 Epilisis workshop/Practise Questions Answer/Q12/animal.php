<?php

class Animal
{
    private $name;
    private $legs;
    private $noise;

    function __construct($name_info, $legs_info, $noise)
    {
        $this->name = $name_info;
        $this->legs = $legs_info;
        $this->noise = $noise;
    }

    #Create your own getters/setters
    public function getName()
    {
        return $this->name;
    }

    public function getLegs()
    {
        return $this->legs;
    }

    public function getNoise()
    {
        return $this->noise;
    }
}

$animals = [
    new Animal("Dog", 10, "Bark!"),
    new Animal("Cat", 5, "Meowww..."),
    new Animal("Hamster", 2, "Squeak squeak bruh")
];

foreach ($animals as $animal) {
    echo "{$animal->getName()} has {$animal->getLegs()} and make the sound {$animal->getNoise()}</br>";
}
