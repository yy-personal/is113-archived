<!--
    Name: Lim Yin Yao
    Email: yinyao.lim.2020
-->
<?php

    ### DO NOT MODIFY THIS FILE ###
    
    class Stall {
        private $name;
        private $sales; # an indexed array of Sale objects
        
        public function __construct($name, $sales) {
            $this->name = $name;
            $this->sales = $sales;
        }

        public function getName() {
            return $this->name;
        }

        public function getSales() {
            return $this->sales;
        }
    }
?>