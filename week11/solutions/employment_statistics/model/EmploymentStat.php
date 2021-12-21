<?php
    class EmploymentStat{
        // declare 7 properties - id : Integer, year : Integer, 
        // university: String, school : String, degree : String, 
        // employment_rate : Float, avgSalary: Integer
        private $id;
        private $year;
        private $university;
        private $school;
        private $degree;
        private $employment_rate;
        private $avgSalary;  // average basic monthly salary

        // add code for constructor to initialize the properties of Employment class
        public function __construct($id, $year, $uni, $sch, $degree, $rate, $salary){
            $this->id = $id;
            $this->year = $year;
            $this->university = $uni;
            $this->school = $sch;
            $this->degree = $degree;
            $this->employment_rate = $rate;
            $this->avgSalary = $salary;
        }

        // add getter methods for returning the properties of Employment class
        public function getID() {
            return $this->id;
        }
        
        public function getYear() {
            return $this->year;
        }

        public function getUniversity() {
            return $this->university;
        }

        public function getSchool() {
            return $this->school;
        }

        public function getDegree() {
            return $this->degree;
        }

        public function getEmploymentRate() {
            return $this->employment_rate;
        }

        public function getAvgSalary() {
            return $this->avgSalary;
        }
    }
?>