<?php

require_once 'Cat.php';

class CatDAO {

    private $cats;

    // constructor
    public function __construct() {
        // Pre-populate static data

        $this->cats = [
            
            new Cat('Hungry', 5, 'F', 'A'),
            new Cat('Layfoo', 9, 'M', 'P'),
            new Cat('Needy', 3, 'M', 'P'),
            new Cat('Lazy', 1, 'F', 'P'),
            new Cat('Angry', 3, 'M', 'A')
        ];

    }

    // whoever needs $cats, call this method off CatDAO object
    public function getCats() {
        return $this->cats;
    }

}

?>