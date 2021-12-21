<?php

// $petsArr = [
//     [
//         'name'   => 'Okja',
//         'type'   => 'Super Pig',
//         'gender' => 'Female',
//         'age'    => 3
//     ],
//     [
//         'name'   => 'King Kong',
//         'type'   => 'Gorilla',
//         'gender' => 'Male',
//         'age'    => 5
//     ],
//     [
//         'name'   => 'Bailey',
//         'type'   => 'Beluga Whale',
//         'gender' => 'Male',
//         'age'    => 7
//     ]
// ];



class Pet {
    private $name;
    private $type;
    private $gender;
    private $age;
    // public $hungry_sound;
    // public $snore_sound;

    public function __construct($Nname, $Ntype,$Ngender,$Nage)
    {
        $this->name = $Nname;
        $this->type = $Ntype;
        $this->gender = $Ngender;
        $this->age = $Nage;
        // $this->hungry = $Nhungry;
        // $this->snore = $Nsnore;

    }

    // Getter methods
    public function getName(){
        return $this -> name;
    }
    public function getType(){
        return $this -> type;
    }
    public function getGender(){
        return $this -> gender;
    }
    public function getAge(){
        return $this -> age;
    }
    public function hungry(){
        return 'hungry';
    }
    public function snore(){
        return 'snore';
    }
}


$petsArr = [
    new Pet('Okja','Super Pig','Female',3),
    new Pet('King Kong','Gorilla','Male',5),
    new Pet('Bailey','Beluga Whale','Male',7)
]




?>