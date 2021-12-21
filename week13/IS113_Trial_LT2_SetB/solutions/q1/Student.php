<?php 
class Student{
    private $id;
    private $name;
    private $school;

    public function __construct($id,$name,$school){
        $this->id = $id;
        $this->name = $name;
        $this->school = $school;
    }

    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function getSchool(){
        return $this->school;
    }

}
?>