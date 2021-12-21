<?php

class Star {
    private $id;
    private $name;
    private $gender;
    private $photo;
    private $headline;

    public function __construct($id, $name, $gender, $photo, $headline) {
        $this->id = $id;
        $this->name = $name;
        $this->gender = $gender;
        $this->photo = $photo;
        $this->headline = $headline;
    }

    public function getID() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getGender() {
        return $this->gender;
    }

    public function getPhoto() {
        return $this->photo;
    }

    public function getHeadline() {
        return $this->headline;
    }
}

?>