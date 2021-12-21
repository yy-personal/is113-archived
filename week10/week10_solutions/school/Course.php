<?php

require_once 'Teacher.php';

class Course {
    private $id;       // String
    private $title;    // String
    private $term;     // Integer
    private $credit;   // Integer
    private $teachers; // Indexed Array of Teacher objects

    public function __construct($pId, $pTitle, $pTerm, $pCredit, $pTeachers) {
        $this->id = $pId;
        $this->title = $pTitle;
        $this->term = $pTerm;
        $this->credit = $pCredit;
        $this->teachers = $pTeachers;
    }

    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getTerm() {
        return $this->term;
    }

    public function getCredit() {
        return $this->credit;
    }

    public function getTeachers() {
        return $this->teachers;
    }

    public function getDetails() {

        $teacherNameArray = [];
        foreach($this->teachers as $teacherObject) {
            $teacherNameArray[] = $teacherObject->getFullname();
        }

        $teacherNames = implode(", ", $teacherNameArray);

        $str = "[" . $this->id . "] " . $this->title . " taught by " . $teacherNames;

        return $str;
    }
}

?>