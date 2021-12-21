<!--
    Name: Lim Yin Yao
    Email: yinyao.lim.2020
-->
<?php

    ### DO NOT MODIFY THIS FILE ###
        
    class SaleLineItem {
        private $itemName;
        private $qty;
        private $pricePerUnit;
        
        public function __construct($itemName, $qty, $pricePerUnit) {
            $this->itemName = $itemName;
            $this->qty = $qty;
            $this->pricePerUnit = $pricePerUnit;
        }

        public function getItemName() {
            return $this->itemName;
        }

        public function getQty() {
            return $this->qty;
        }

        public function getPricePerUnit() {
            return $this->pricePerUnit;
        }
    }
?>