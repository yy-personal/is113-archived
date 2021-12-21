<?php

require_once 'Cat.php';

class CatDAO {
    
    private $cats; // Indexed Array of Cat objects

    // Constructor
    // Pre-populate static data
    public function __construct() {

        $this->cats = [
            new Cat('Dirty', 12, 'M', 'A'),
            new Cat('Filthy', 7, 'F', 'A'),
            new Cat('Boring', 3, 'M', 'A'),
            new Cat('Needy', 3, 'M', 'P'),
            new Cat('Lazy', 1, 'F', 'P')
        ];

    }

    // Whoever needs $cats, call this Getter method
    public function getCats() {
        return $this->cats;
    }

    // Returns an Indexed Array of cats with a given 'status'
    // $status ('P' or 'A')
    public function getCatsByStatus($status) {
        $return_array = [];

        foreach($this->cats as $cat_object) {
            if( $cat_object->getStatus() == $status ) {
                $return_array[] = $cat_object;
            }
        }

        return $return_array;
    }

    // Returns an Indexed Array of cats with a given 'gender'
    // $gender ('M' or 'F')
    public function getCatsByGender($gender) {
        $return_array = [];

        foreach($this->cats as $cat_object) {
            if( $cat_object->getGender() == $gender ) {
                $return_array[] = $cat_object;
            }
        }

        return $return_array;
    }

    // Returns an Indexed Array of cats with:
    //    a given $gender ('M' or 'F')
    //    AND
    //    a given $status ('P' or 'A')
    public function getCatsByGenderStatus($gender, $status) {
        $return_array = [];

        foreach($this->cats as $cat_object) {
            if( $cat_object->getGender() == $gender && $cat_object->getStatus() == $status ) {
                $return_array[] = $cat_object;
            }
        }

        return $return_array;
    }

}
