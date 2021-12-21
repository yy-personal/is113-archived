<?php
/* 
1.  Do NOT change the existing code.
2.  Do NOT add attributes to this class.
3.  Read TestBasket.php and ADD the missing methods after line 40.
*/
class Basket {

    // ATTRIBUTES
    // name of this basket
    private $name; 

    // associative array where key is item (String) and value is quantity (int)
    private $itemQtyArr; 
    
    // CONSTRUCTOR
    public function __construct($name) {
        $this->name = $name;
        $this->itemQtyArr = [];
    } 

    // METHODS
    public function getSummary() {
        $summary = "Basket '$this->name' [ ";

        if ( count($this->itemQtyArr) == 0 ) {
            $summary .= 'nothing.';
        } else {
            foreach ( $this->itemQtyArr as $item => $qty ) {
                $summary .= "$qty $item, ";
            }

        }
        $summary .= ']';

        return $summary;
    } // end function getSummary

    // ADD MISSING METHODS HERE
    
    public function get($item) {
        /*
            Ref: http://php.net/manual/en/function.array-key-exists.php
            
            array_key_exists($key, $associativeArray) 
                Returns TRUE if $associativeArray has $key as a key.  Otherwise, returns FALSE.

            Equivalent code: isset( $associativeArray[$key] )
        */

        if ( array_key_exists($item, $this->itemQtyArr) ) {
            return $this->itemQtyArr[$item];
        }
        return 0;
    } // end function get

    public function add($item) {
        // Does the associative array has $item as key?
        if ( isset($this->itemQtyArr[$item]) ) {

            // yes, associative array has $item as key
            // increment the quantity
            $newQty = $this->itemQtyArr[$item] + 1;
            $this->itemQtyArr[$item] = $newQty;

        } else {
            // No, associative array does not have $item as key
            // i.e. this is the first time $item is added
            $this->itemQtyArr[$item] = 1;
        }

    } // end function add

    public function remove($item) {
        // Does the associative array has $item as key?
        if ( ! isset($this->itemQtyArr[$item]) ) {
            // no such item
            // return false to indicate remove is successful
            return false;
        }

        // else has $item 
        // reduce quantity by 1
        $newQty = $this->itemQtyArr[$item] -1;
        if ( $newQty > 0 ) {
            $this->itemQtyArr[$item] = $newQty;

        } else {
            // quantity drops to zero; remove $item from $this->itemQtyArr
            unset( $this->itemQtyArr[$item] );

        }

        // return true to indicate remove is successful
        return true;

    } // end function remove

} // end class Basket