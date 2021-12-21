<?php
    class Shop{
        private $shopname;
        private $location;
       
        public function __construct($shopname, $location){
            $this->shopname = $shopname;
            $this->location = $location;
        }

        public function getShopName() {
            return $this->shopname;
        }

        public function getLocation() {
            return $this->location;
        }

    }
?>