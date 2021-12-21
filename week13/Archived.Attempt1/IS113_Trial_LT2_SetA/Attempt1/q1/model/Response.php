<?php
    # DO NOT MODIFY THIS FILE
    
    class Response {

        private $name;
        private $preferredClassLength;
        private $preferredSemLength;

        public function __construct($name, $preferredClassLength, $preferredSemLength) {
            $this->name = $name;
            $this->preferredClassLength = $preferredClassLength;
            $this->preferredSemLength = $preferredSemLength;
        }

        public function getName(){
            return $this->name;
        }

        public function getPreferredClassLength(){
            return $this->preferredClassLength;
        }

        public function getPreferredSemLength(){
            return $this->preferredSemLength;
        }

    }
?>