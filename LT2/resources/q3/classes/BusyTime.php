<?php
    
    ### DO NOT MODIFY THIS FILE ###
    
    class BusyTime{
        private $dayOfTheWeek;
        private $startTime;
        private $duration;
        
        public function __construct ($dayOfTheWeek, $startTime, $duration){
            $this->dayOfTheWeek = $dayOfTheWeek;
            $this->startTime = $startTime;
            $this->duration = $duration;
        }

        public function getDayOfTheWeek(){
            return $this->dayOfTheWeek;
        }

        public function getStartTime(){
            return $this->startTime;
        }

        public function getDuration(){
            return $this->duration;
        }

        public function clone(){
            return new BusyTime($this->dayOfTheWeek, $this->startTime, $this->duration);
        }

    }
?>