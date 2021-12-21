<?php

require_once 'Cat.php';

class CatDAO {
    
    private $cats;

    // constructor
    public function __construct() {
        // Pre-populate static data

        $this->cats = [
            new Cat('Dirty', 12, 'M', 'A'),
            new Cat('Filthy', 7, 'F', 'A'),
            new Cat('Boring', 3, 'M', 'A'),
            new Cat('Needy', 3, 'M', 'P'),
            new Cat('Lazy', 1, 'F', 'P')
        ];

    }

    // whoever needs $cats, call this method off CatDAO object
    public function getCats() {
        return $this->cats;
    }

    // returns an Indexed Array of cats with a given 'status'
    public function getCatsByStatus($status) {
        $return_array = [];

        foreach($this->cats as $cat_object) {
            if( $cat_object->getStatus() == $status )
                $return_array[] = $cat_object;
        }

        return $return_array;
    }

}
