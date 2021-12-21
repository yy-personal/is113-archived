<?php

class Teacher {
    private $id;        // String
    private $fullname;  // String
    private $gender;    // Char

    public function __construct($pId, $pFullname, $pGender) {
        $this->id = $pId;
        $this->fullname = $pFullname;
        $this->gender = $pGender; 
    }

    public function getId() {
        return $this->id;
    }

    public function getFullname() {
        return $this->fullname;
    }

    public function getGender() {
        return $this->gender;
    }
}

?>