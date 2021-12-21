<!--
    Name: Lim Yin Yao
    Email: yinyao.lim.2020
-->

<?php
    class Sale {

        ### START OF DO NOT MODIFY ###
        
        private $yearOfSale;
        private $saleLineItems; # an indexed array of SaleLineItem objects
        
        public function __construct($yearOfSale, $saleLineItems) {
            $this->yearOfSale = $yearOfSale;
            $this->saleLineItems = $saleLineItems;
        }

        public function getYearOfSale() {
            return $this->yearOfSale;
        }

        public function getSaleLineItems() {
            return $this->saleLineItems;
        }
        
        ### END OF DO NOT MODIFY ###

        public function getDollarsReceived() {
            # Add Code Here
            $total = 0.0;
            $items_array = $this->saleLineItems;

            // var_dump($items_array );

            foreach($items_array as $item){
                $price=$item->getPricePerUnit();   
                $quantity = $item->getQty();
                $priceTotal = $price*$quantity;
                $total = $total + $priceTotal;
            }
            return $total;
        }
    }
?>