<?php
    class Shop{
        private $name;
        private $location;
        private $items;   // this is an array of Products objects.

        public function __construct($name, $location){
            $this->name = $name;
            $this->location = $location;
            
            // Get list of Products available for the shop
            $dao = new ProductDAO ();
            $this->items = $dao->retrieveByStoreName($name);
        }

        public function getName() {
            return $this->name;
        }

        public function getLocation() {
            return $this->location;
        }

        public function getItems() {
            return $this->items;
        }
    }
?>