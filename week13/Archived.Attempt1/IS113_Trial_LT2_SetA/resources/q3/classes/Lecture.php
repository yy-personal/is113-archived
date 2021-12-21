<?php
    class Lecture{
        private $id;
        private $startTime;
        private $duration;
        
        public function __construct($id,$startTime,$duration){
            $this->id = $id;
            $this->startTime = $startTime;
            $this->duration = $duration;
        }
        public function getId(){
            return $this->id;
        }
        public function getStartTime(){
            return $this->startTime;
        }
        public function getDuration(){
            return $this->duration;
        }
    }
?>