<?php

    class product{
        private $product_name;
        private $category_name;
        private $quantity;
        private $price;

        public function __construct($product_name, $category_name, $quantity, $price){
            $this-> product_name= $product_name;
            $this-> category_name = $category_name;
            $this-> quantity = $quantity;
            $this-> price = $price;
        }

        public function getProductName() {
            return $this->product_name;
        }
        public function getCategoryName() {
            return $this->category_name;
        }
        public function getQuantity() {
            return $this->quantity;
        }
        public function getPrice() {
            return $this->price;
        }
    
    }

?>