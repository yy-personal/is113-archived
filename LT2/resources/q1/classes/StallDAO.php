<!--
    Name: Lim Yin Yao
    Email: yinyao.lim.2020
-->
<?php

    ### DO NOT MODIFY THIS FILE ###
    
    class StallDAO {
        private $stalls;
        
        public function __construct() {
            $this->stalls = [];
            
            $sli1 = new SaleLineItem("Chicken Rice", 2, 4.5); //name, quantity, price unit
            $sli2 = new SaleLineItem("Mee Siam", 1, 4);
            $sli3 = new SaleLineItem("Prata", 1, 3);
            $sli4 = new SaleLineItem("Chicken Chop", 2, 5);
            $sli5 = new SaleLineItem("Biryani Rice", 2, 5);
            $sli6 = new SaleLineItem("Chicken Rice", 1, 4.5);
            $sli7 = new SaleLineItem("Mee Siam", 2, 4);
            $sli8 = new SaleLineItem("Prata", 3, 3);
            $sli9 = new SaleLineItem("Chicken Chop", 5, 5);
            $sli10 = new SaleLineItem("Biryani Rice", 1, 5);
            
            $s1 = new Sale(2021, [$sli1, $sli2]);
            $s2 = new Sale(2020, [$sli3]);
            $s3 = new Sale(2020, [$sli10]);
            $s4 = new Sale(2021, [$sli4, $sli5]);
            $s5 = new Sale(2020, [$sli6, $sli7, $sli8, $sli9]);

            $stall1 = new Stall("Absolutely the Best", [$s1,$s2]);
            $stall2 = new Stall("Best Food", [$s3]);
            $stall3 = new Stall("Come! Get Good Food!", [$s4, $s5]);

            $this->stalls = [$stall1, $stall2, $stall3];
        }

        public function getStalls() {
            return $this->stalls;
        }

    }
?>