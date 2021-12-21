<?php

require_once 'Course.php';

class CourseDAO {
    private $courses;  // Indexed Array of Course objects

    public function __construct() {
        $this->courses = [
            new Course(
                'IS111',
                'Intro to Programming',
                1,
                2, 
                [
                    new Teacher('000111', 'Brad Pitt', 'M'),
                    new Teacher('000222', 'Christian Slater', 'M')
                ]
            ),
            new Course(
                'IS112',
                'Data Managememnt',
                2,
                2, 
                [
                    new Teacher('000333', 'Christina Aguilera', 'F'),
                    new Teacher('000555', 'Selena Gomez', 'F')
                ]
            ),
            new Course(
                'IS113',
                'Web Application Development 1',
                2,
                3, 
                [
                    new Teacher('000555', 'Selena Gomez', 'F'),
                    new Teacher('000222', 'Christian Slater', 'M')
                ]
            ),
            new Course(
                'CS101',
                'Programming Fundamentals',
                1,
                2, 
                [
                    new Teacher('000111', 'Brad Pitt', 'M'),
                    new Teacher('000222', 'Christian Slater', 'M')
                ]
            ),
            new Course(
                'CS105',
                'Object-Oriented Programming',
                2,
                3, 
                [
                    new Teacher('000333', 'Christina Aguilera', 'F'),
                    new Teacher('000222', 'Christian Slater', 'M'),
                    new Teacher('000555', 'Selena Gomez', 'F')
                ]
            )
        ];
    }

    public function getCourses() {
        return $this->courses;
    }


    // Return an Indexed Array of Unique Teacher names
    public function getTeacherNames() {

        $teacherNameArray = [];

        foreach($this->courses as $courseObject) {
            $teachersArray = $courseObject->getTeachers();

            foreach($teachersArray as $teacherObject) {
                if( !in_array($teacherObject->getFullname(), $teacherNameArray) ) {
                    $teacherNameArray[] = $teacherObject->getFullname();
                }
            }
        }

        return $teacherNameArray;
    }

    // Return an Indexed Array of Course objects
    // where
    //    Course $term == $pTerm
    //    AND
    //    Course $credit == $pCredit
    public function getCourse($pTerm, $pCredit) {
        $resultArray = [];

        foreach($this->courses as $courseObject) {

            if( $courseObject->getTerm() == $pTerm && $courseObject->getCredit() == $pCredit ) {
                $resultArray[] = $courseObject;
            }
        }

        return $resultArray;
    }

    // Return an Indexed Array of Course objects
    // where
    //    Course $term is in $pTermArray
    //    AND
    //    Course $credit is in $pCreditArray
    public function getCourse2($pTermArray, $pCreditArray) {
        $resultArray = [];

        foreach($this->courses as $courseObject) {

            if( in_array($courseObject->getTerm(), $pTermArray) && in_array($courseObject->getCredit(), $pCreditArray) ) {
                $resultArray[] = $courseObject;
            }
        }

        return $resultArray;
    }

    // Return an Indexed Array of Course objects
    // where
    //    Course's teachers' names == $pTeacher
    public function getCourse3($pTeacher) {
        $resultArray = [];

        foreach($this->courses as $courseObject) {
            $teachersArray = $courseObject->getTeachers();

            foreach($teachersArray as $teacherObject) {
                if( $teacherObject->getFullname() == $pTeacher ) {
                    $resultArray[] = $courseObject;
                }
            }
        }

        return $resultArray;
    }
}

?>