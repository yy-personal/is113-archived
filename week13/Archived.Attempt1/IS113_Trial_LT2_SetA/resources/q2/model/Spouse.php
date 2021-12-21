<?php

class Spouse {
    private $empId;
    private $spouseName;
   
    public function __construct($empId, $spouseName){
        $this->empId = $empId;
        $this->spouseName = $spouseName;
    }

    public function getEmpId(){
        return $this->empId;
    }

    public function getSpouseName(){
        return $this->spouseName;
    }
}