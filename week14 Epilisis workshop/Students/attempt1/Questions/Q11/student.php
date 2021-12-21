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
        

        /**
         * Get the value of hobbies
         */ 
        public function getHobbies()
        {
                return $this->hobbies;
        }

        /**
         * Set the value of hobbies
         *
         * @return  self
         */ 
        public function setHobbies($hobbies)
        {
                $this->hobbies = $hobbies;

                return $this;
        }

        /**
         * Get the value of age
         */ 
        public function getAge()
        {
                return $this->age;
        }

        /**
         * Set the value of age
         *
         * @return  self
         */ 
        public function setAge($age)
        {
                $this->age = $age;

                return $this;
        }

        /**
         * Get the value of name
         */ 
        public function getName()
        {
                return $this->name;
        }

        /**
         * Set the value of name
         *
         * @return  self
         */ 
        public function setName($name)
        {
                $this->name = $name;

                return $this;
        }
    }