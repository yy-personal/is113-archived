<?php

class Cat {

    private $name;
    private $age;
    private $gender;
    private $status;
    ##Can use public method to get private stuffs
    public function __construct($pName, $pAge, $pGender, $pStatus) {
        $this->name = $pName;
        $this->age = $pAge;
        $this->gender = $pGender;
        $this->status = $pStatus;
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public function getGender() {
        return $this->gender;
    }

    public function getStatus() {
        return $this->status;
    }

    public function __toString() {
        $statusMsg = 'available for adoption';
        if( $this->status == 'P' ) {
            $statusMsg = 'pending adoption';
        }

        $prefix = 'Miss';
        if( $this->gender = 'M' ) {
            $prefix = 'Mister';
        }

        return $prefix . ' ' . $this->name . ' is ' . $this->age . ' years old and ' . $statusMsg . '.';
    }
    // public function __toString(){
    //     echo 'Hello World';
    // }
    
}


?>