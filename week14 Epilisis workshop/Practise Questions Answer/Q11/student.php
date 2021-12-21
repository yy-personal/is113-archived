<?php
    class Student {
        private $name;
        private $age;
        private $hobbies;

        function __construct($name_info, $age_info, $hobbies_info)
        {
            $this->name = $name_info;
            $this->age = $age_info;
            $this->hobbies = $hobbies_info;
        }

        #Create your own getters/setters
        public function getName(){
            return $this->name;
        }

        public function getAge(){
            return $this->age;
        }

        public function gethobbies(){
            return $this->hobbies;
        }
    }