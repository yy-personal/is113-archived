<?php
    class Food {
        private $sku;        // sku number
        private $foodDesc;   // name of the food item
        private $category;   // food category
        private $price;      // as a float e.g 1.35
    
        public function __construct($sku, $foodDesc, $category, $price){
            $this->sku = $sku;
            $this->foodDesc = $foodDesc;
            $this->category = $category;
            $this->price = $price;
        }

        public function getSKU() {
            return $this->sku;
        }

        public function getFoodDesc() {
            return $this->foodDesc;
        }

        public function getcategory() {
            return $this->category;
        }

        public function getPrice() {
            return $this->price;
        }
    }
?>