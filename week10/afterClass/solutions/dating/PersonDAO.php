<?php

require_once 'Person.php';

class PersonDAO {

    private $people;

    // Constructor
    // Pre-populate with static data
    public function __construct() {
        // $people is an Array of Person objects
        $this->people  = array(
            new Person("Tonald Drump", 'M', 72, 188, 150, 'tonald.jpg'),
            new Person("Rack Bama", 'M', 36, 185, 68, 'rack.jpg'),
            new Person("Rom Cruise", 'M', 23, 168, 58, 'rom.jpg'),
            new Person("Selena Goaway", 'F', 20, 160, 45, 'selena.jpg'),
            new Person("Hailey Bald", 'F', 18, 175, 60, 'hailey.jpg'),
            new Person("Nicole Who", 'F', 35, 180, 58, 'nicole.jpg')
        );
    }

    // Return $people Array (of Person objects)
    public function getPeople() {
        return $this->people;
    }

    // Return an Array of Person objects (where the Person's gender is $gender)
    // Valid values for $gender: 'M' or 'F'
    public function getPeopleByGender($gender) {
        $ret = [];
        foreach($this->people as $person) {
            if( $person->getGender() == $gender ) {
                $ret[] = $person;
            }
        }
        return $ret;
    }
}

?>