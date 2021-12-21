<?php

class Pet {

    // Every Pet object will have the same set of "attributes"
    private $name;
    private $type;
    private $gender;
    private $age;
    
    // Special method --> 'constructor'
    // This is called when user creates a new Pet object!!!
    //
    //   For example, I create a new Pet object:
    //
    //      $pet = new Pet('Smelly', 'Dog', 'Male', 3);
    //
    //      'new Pet' will invoke a call to Pet's constructor (BELOW)
    public function __construct($pName, $pType, $pGender, $pAge) {
        $this->name = $pName;
        $this->type = $pType;
        $this->gender = $pGender;
        $this->age = $pAge;
    }

    // Getter method
    public function getName() {
        return $this->name;
    }

    // Getter method
    public function getType() {
        return $this->type;
    }

    // Getter method
    public function getGender() {
        return $this->gender;
    }

    // Getter method
    public function getAge() {
        return $this->age;
    }

    // Setter method
    public function setAge($pAge) {
        $this->age = $pAge;
    }

    

    // What a Pet object can do - make hungry sound
    public function hungry() {
        return "Hungrry";
    }

    // What a Pet object can do - make snore sound
    public function snore() {
        return "Ggrrr";
    }
}

?>