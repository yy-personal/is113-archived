<?php

class Grade {

    private $username;
    private $course_id;
    private $course_title;
    private $course_grade;
    
    public function __construct($username, $course_id, $course_title, $course_grade) {
        $this->username = $username;
        $this->course_id = $course_id;
        $this->course_title = $course_title;
        $this->course_grade = $course_grade;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getCourseId() {
        return $this->course_id;
    }

    public function getCourseTitle() {
        return $this->course_title;
    }

    public function getCourseGrade() {
        return $this->course_grade;
    }
}

?>