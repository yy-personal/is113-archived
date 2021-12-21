<?php

    ### DO NOT MODIFY THIS FILE ###
    
    class Student{
        private $id;
        private $name;
        private $GPA;
        private $timetable; # an indexed array of BusyTime objects
        
        public function __construct($id, $name, $GPA, $timetable){
            $this->id = $id;
            $this->name = $name;
            $this->GPA = $GPA;
            $this->timetable = $timetable;
        }

        public function getId() {
            return $this->id;
        }

        public function getName(){
            return $this->name;
        }
        
        public function getGPA(){
            return $this->GPA;
        }

        public function getTimetable(){
            return $this->timetable;
        }

        public function clone(){
            return new Student($this->id, $this->name, $this->GPA, $this->timetable);
        }
    }
?>