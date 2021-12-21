<?php
    # Add code here
    class Cylinder{
        private $radius;
        private $height;
        const PI = 3.14;
        public function __construct($radius, $height){
            $this->radius = $radius;
            $this->height = $height;
        }
        public function getRadius(){
            return $this->radius;
        }
        public function getHeight(){
            return $this->height;
        }
        public function setRadius($r){
            $this->radius = $r;
        }
        public function setHeight($h){
            $this->height = $h;
        }
        public function getVolume(){
            return self::PI * $this->radius * $this->radius * $this->height;
        }
        public function toString(){
            return "radius: {$this->radius}, height: {$this->height}";
        }
    }
?>