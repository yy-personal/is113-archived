<?php

class Employee {

    private $empId;
    private $name;
    private $password;
    
    public function __construct($empId, $name, $password){
        $this->empId = $empId;
        $this->name = $name;
        $this->password= $password;
    }

    public function getEmpId(){
        return $this->empId;
    }

    public function getName(){
        return $this->name;
    }

    public function getPassword(){
        return $this->password;
    }


}