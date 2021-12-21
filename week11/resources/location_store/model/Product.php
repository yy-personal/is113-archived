<?php

    class Product{
        private $storeName;  //name of the store
        private $item;       // e.g. apple, lego
        private $category;   // e.g. fruit, toy, vegetable
        private $price;      // as a float e.g 1.35
    
        public function __construct($storeName, $item, $category, $price){
            $this->storeName = $storeName;
            $this->item = $item;
            $this->category = $category;
            $this->price = $price;
        }

        public function getStoreName() {
            return $this->storeName;
        }
        public function getItem() {
            return $this->item;
        }

        public function getcategory() {
            return $this->category;
        }

        public function getPrice() {
            return $this->price;
        }
    }
?>