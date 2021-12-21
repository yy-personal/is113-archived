<?php
    # Enter code here
    class Rational{
        private $numerator;
        private $denominator;
        public function __construct($n,$d){
            $this->numerator = $n;
            $this->denominator = $d;
        }
        public function getNumerator(){
            return $this->numerator;
        }
        public function getDenominator(){
            return $this->denominator;
        }
        public function setNumerator($n){
            $this->numerator = $n;
        }
        public function setDenominator($d){
            $this->denominator = $d;
        }
        public function add($aNumber){
            $a = $this->numerator;
            $b = $this->denominator;
            $c = $aNumber->numerator;
            $d = $aNumber->denominator;

            $new_n = (($a * $d) + ($b * $c));
            $new_d = $b*$d;
            return new Rational($new_n,$new_d);
        }
        public function substract($aNumber){
            $a = $this->numerator;
            $b = $this->denominator;
            $c = $aNumber->numerator;
            $d = $aNumber->denominator;

            $new_n = (($a * $d) - ($b * $c));
            $new_d = $b*$d;
            return new Rational($new_n,$new_d);
        }
        public function multiply($aNumber){
            $a = $this->numerator;
            $b = $this->denominator;
            $c = $aNumber->numerator;
            $d = $aNumber->denominator;

            $new_n = $a*$c;
            $new_d = $b*$d;
            return new Rational($new_n,$new_d);
        }
        public function divide($aNumber){
            $a = $this->numerator;
            $b = $this->denominator;
            $c = $aNumber->numerator;
            $d = $aNumber->denominator;

            $new_n = $a*$d;
            $new_d = $b*$c;
            return new Rational($new_n,$new_d);
        }

        public function toString(){
            return "{$this->numerator}/{$this->denominator}";
        }
    }
?>