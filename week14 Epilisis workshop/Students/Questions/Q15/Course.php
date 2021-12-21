<?php

class Course {
    public $studentName;
    public $courseCode;
    public $courseDesc;
    public $weekOfDay;
    public $startTime;
    public $numUnits;
    

    public function __construct($studentName, $courseCode, $courseDesc, $weekOfDay, $startTime, $numUnits) {
        $this->studentName = $studentName;
        $this->courseCode = $courseCode;
        $this->courseDesc = $courseDesc;
        $this->weekOfDay = $weekOfDay;
        $this->startTime = $startTime;
        $this->numUnits = $numUnits;
    } 
}

?>


