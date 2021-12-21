<?php
    # Enter code here
    class Rectangle{
        private $length;
        private $breadth;
        public function __construct($l,$b){
            $this->length = $l;
            $this->breadth = $b;
        }
        public function getLength(){
            return $this->length;
        }
        public function getBreadth(){
            return $this->breadth;
        }
        public function setLength($l){
            $this->length = $l;
        }
        public function setBreadth($b){
            $this->breadth = $b;
        }
        public function getArea(){
            return $this->getBreadth() * $this->getLength();
        }
        public function getPerimeter() {
            return 2 * ($this->length + $this->breadth);
        }
        public function toString() {
            return "Length = {$this->length}, Breadth = {$this->breadth}";
        }
    }
?>