<?php
    class Person{
        private $name;
        private $gender;
        private $age;

        public function __construct($name, $gender, $age){
            $this->name = $name;
            $this->gender = $gender;
            $this->age = $age;
        }

        public function getName() {
            return $this->name;
        }

        public function getGender() {
            return $this->gender;
        }

        public function getAge() {
            return $this->age;
        }
    }
?>