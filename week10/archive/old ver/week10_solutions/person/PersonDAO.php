<?php

require_once 'Person.php';

// Special Class designed to "fetch" data

class PersonDAO {

    private $persons;  // Indexed Array of Person objects

    // Pre-populate Person objects
    public function __construct() {

        // For now, we "hard-code" the data.
        // However, in reality, the data would come from... Database (e.g. MySQL).
        // We will cover Database Interaction in Week 11.
        // In Week 10, we "pretend" as if the data CAME from the database.
        //
        // How does this work?
        // When a new PersonDAO object is created,
        // this CONSTRUCTOR will be called.

        // Below line will INITIALIZE $persons property (see above)
        // as an Indexed Array of 4 Person objects.
        // The "definition/template" of Person comes from Person.php file.
        $this->persons = [
            new Person('Hyun Bin', 'M', 
                    [
                        new Pet('Bongu', 'Dog', 'M', 7),
                        new Pet('Sarang', 'Bird', 'F', 12)
                    ]
            ),

            new Person('Tae Yang', 'M', 
                    [
                        new Pet('Nari', 'Cat', 'F', 3),
                        new Pet('Bong', 'Cat', 'M', 5),
                        new Pet('Mole', 'Cat', 'F', 1)
                    ]
            ),

            new Person('Hyuna', 'F', 
                    [
                        new Pet('Queen', 'Hamster', 'F', 1)
                    ]
            ),

            new Person('Sooji', 'F', 
                    [
                        new Pet('Prince', 'Otter', 'M', 3),
                        new Pet('Yin', 'Lizard', 'F', 1),
                        new Pet('Yang', 'Lizard', 'M', 2)
                    ]
            )
        ];
    }

    public function getPersons() {
        return $this->persons;
    }


    // INPUT  : $pGender ('F' or 'M' or an empty string)
    // OUTPUT : $returnArray (Indexed Array of Person object(s) if any matches are found)
    public function getPersonsByGender($pGender) {
        $returnArray = [];

        foreach($this->persons as $personObject) {
            if($personObject->getGender() == $pGender) {
                $returnArray[] = $personObject;
            }
        }

        return $returnArray;
    }


    // INPUT  : $pMinimumPets (an Integer indicating the number of pets)
    //          e.g. If this value is 3, matches are:
    //               Person object ("Tae Yang")
    //               Person object ("Sooji)
    // OUTPUT : $returnArray (Indexed Array of Person object(s) if any matches are found)
    public function getPersonsByMinimumPets($pMinimumPets) {

        $returnArray = []; // Indexed Array of Person object(s) if any matches are found

        // YOUR CODE GOES HERE

        return $returnArray;

    }

}

?>