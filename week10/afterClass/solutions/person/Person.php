<?php
    # Enter code here
    class Person{
        private $firstName;
        private $lastName;
        private $age;
        public function __construct ($firstName, $lastName, $age){
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->age = $age;
        }

        public function getFirstName(){
            return $this->firstName;
        }
        public function getLastName(){
            return $this->lastName;
        }
        public function getAge(){
            return $this->age;
        }
        public function setAge($age){
            $this->age = $age;
        }
        public function isOlder($anotherPerson){
            if(isset($this->age) && isset($anotherPerson->age)){
                return $this->age > $anotherPerson->age;
            }
            else{
                return false;
            }
        }
        public function toString(){
            return "Person[name={$this->firstName} {$this->lastName},age={$this->age}]";
        }
    }
?>