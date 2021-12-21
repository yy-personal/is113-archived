<?php

    ### DO NOT MODIFY THIS FILE ###
    
    class StudentDAO{
        private $students;
        
        public function __construct(){
            $t1 = new BusyTime ("Mon", "9", "2");
            $t2 = new BusyTime ("Mon", "11", "2");
            $t3 = new BusyTime ("Mon", "13", "4");
            $t4 = new BusyTime ("Tue", "9", "4");
            $t5 = new BusyTime ("Tue", "13", "1");
            $t6 = new BusyTime ("Tue", "14", "1");
            $t7 = new BusyTime ("Tue", "15", "1");
            $t8 = new BusyTime ("Tue", "16", "1");
            $t9 = new BusyTime ("Wed", "9", "4");
            $t10 = new BusyTime ("Wed", "13", "4");
            $t11 = new BusyTime ("Thu", "9", "4");
            $t12 = new BusyTime ("Thu", "13", "4");
            $t13 = new BusyTime ("Fri", "9", "4");
            $t14 = new BusyTime ("Thu", "9", "4");
            $t15 = new BusyTime ("Thu", "13", "4");
            $t16 = new BusyTime ("Fri", "9", "4");

            $students = [];

            $students[] = new Student(1, 'Dan B.', 4, [$t14->clone(),$t10->clone(),$t2->clone(),$t4->clone(),$t6->clone()]);
            $students[] = new Student(2, 'Bob B.', 4, [$t6->clone(),$t16->clone(),$t3->clone(),$t4->clone(),$t8->clone()]);
            $students[] = new Student(3, 'Chris X.', 3.2, [$t7->clone(),$t3->clone(),$t14->clone(),$t4->clone()]);
            $students[] = new Student(4, 'Chris T.', 3.8, [$t3->clone(),$t7->clone(),$t6->clone(),$t4->clone(),$t13->clone(),$t9->clone(),$t16->clone()]);
            $students[] = new Student(5, 'Chris E.', 3.8, [$t4->clone(),$t10->clone(),$t3->clone(),$t11->clone(),$t2->clone(),$t15->clone()]);
            $students[] = new Student(6, 'Sarah U.', 3.2, [$t5->clone(),$t11->clone(),$t3->clone()]);
            $students[] = new Student(7, 'Ann A.', 3.4, [$t5->clone()]);
            $students[] = new Student(8, 'Bob O.', 3.2, [$t11->clone(),$t1->clone(),$t2->clone()]);
            $students[] = new Student(9, 'Sarah J.', 3.6, [$t14->clone(),$t10->clone()]);
            $students[] = new Student(10, 'Emily X.', 4, [$t9->clone(),$t8->clone(),$t15->clone()]);
            $students[] = new Student(11, 'Emily I.', 3.2, [$t3->clone(),$t2->clone(),$t16->clone(),$t1->clone(),$t13->clone(),$t9->clone()]);
            $students[] = new Student(12, 'Chris D.', 3.4, [$t16->clone()]);
            $students[] = new Student(13, 'Ann S.', 3.2, [$t1->clone(),$t15->clone(),$t16->clone(),$t4->clone(),$t3->clone(),$t9->clone(),$t13->clone(),$t14->clone()]);
            $students[] = new Student(14, 'James M.', 3.6, [$t1->clone(),$t16->clone()]);
            $students[] = new Student(15, 'James S.', 3.6, [$t3->clone(),$t12->clone(),$t15->clone(),$t11->clone(),$t13->clone(),$t8->clone()]);
            $students[] = new Student(16, 'Jill Q.', 4, [$t7->clone(),$t16->clone(),$t11->clone(),$t4->clone(),$t13->clone(),$t9->clone(),$t6->clone(),$t2->clone()]);
            $students[] = new Student(17, 'Jill B.', 3.8, [$t15->clone(),$t7->clone()]);
            $students[] = new Student(18, 'Kane S.', 4, [$t16->clone(),$t8->clone(),$t5->clone(),$t11->clone(),$t10->clone(),$t13->clone(),$t15->clone()]);
            $students[] = new Student(19, 'Ann Q.', 3.6, [$t13->clone(),$t6->clone(),$t9->clone(),$t1->clone(),$t7->clone(),$t3->clone(),$t4->clone()]);
            $students[] = new Student(20, 'Emily L.', 3.2, [$t1->clone()]);
            $students[] = new Student(21, 'Emily G.', 3.8, [$t2->clone(),$t14->clone(),$t8->clone(),$t3->clone()]);
            $students[] = new Student(22, 'James G.', 3.2, [$t11->clone(),$t1->clone()]);
            $students[] = new Student(23, 'Jill J.', 4, [$t5->clone(),$t3->clone(),$t15->clone()]);
            $students[] = new Student(24, 'Julia Q.', 3.6, [$t3->clone(),$t7->clone(),$t13->clone(),$t12->clone(),$t6->clone(),$t11->clone(),$t10->clone()]);
            $students[] = new Student(25, 'Bob N.', 3.2, [$t15->clone(),$t7->clone(),$t16->clone(),$t10->clone()]);
            $students[] = new Student(26, 'Chris G.', 3.8, [$t10->clone(),$t4->clone(),$t8->clone(),$t12->clone(),$t7->clone(),$t1->clone(),$t14->clone(),$t3->clone()]);
            $students[] = new Student(27, 'Jill Y.', 3.4, [$t6->clone(),$t15->clone()]);
            $students[] = new Student(28, 'James L.', 3.6, [$t2->clone(),$t16->clone()]);
            $students[] = new Student(29, 'Bob H.', 3.4, [$t5->clone(),$t13->clone(),$t16->clone()]);
            $students[] = new Student(30, 'James A.', 3.2, [$t14->clone(),$t3->clone(),$t1->clone(),$t10->clone(),$t9->clone(),$t4->clone()]);
            $students[] = new Student(31, 'Ann X.', 3.4, [$t2->clone(),$t7->clone(),$t6->clone(),$t5->clone(),$t14->clone(),$t16->clone(),$t13->clone(),$t8->clone()]);
            $students[] = new Student(32, 'Julia G.', 3.8, [$t16->clone(),$t7->clone()]);
            $students[] = new Student(33, 'Bob E.', 4, [$t15->clone(),$t3->clone(),$t6->clone()]);
            $students[] = new Student(34, 'Chris A.', 4, [$t14->clone(),$t11->clone(),$t3->clone(),$t2->clone(),$t16->clone(),$t15->clone()]);
            $students[] = new Student(35, 'Julia J.', 3.2, [$t9->clone(),$t1->clone(),$t14->clone(),$t7->clone()]);
            $students[] = new Student(36, 'Jill D.', 3.4, [$t12->clone(),$t16->clone(),$t11->clone(),$t4->clone(),$t5->clone(),$t1->clone()]);
            $students[] = new Student(37, 'Ann K.', 3.6, [$t10->clone(),$t15->clone(),$t1->clone(),$t14->clone(),$t7->clone()]);
            $students[] = new Student(38, 'Bob J.', 3.4, [$t14->clone(),$t11->clone()]);
            $students[] = new Student(39, 'Dan T.', 3.4, [$t16->clone(),$t3->clone(),$t2->clone(),$t10->clone(),$t9->clone(),$t8->clone()]);
            $students[] = new Student(40, 'Bob L.', 3.2, [$t1->clone(),$t2->clone(),$t13->clone(),$t12->clone()]);
            $students[] = new Student(41, 'James K.', 3.8, [$t7->clone(),$t6->clone(),$t10->clone(),$t9->clone()]);
            $students[] = new Student(42, 'Dan D.', 3.4, [$t2->clone(),$t9->clone(),$t1->clone(),$t16->clone(),$t12->clone(),$t5->clone()]);
            $students[] = new Student(43, 'Sarah G.', 3.6, [$t16->clone(),$t8->clone(),$t13->clone(),$t3->clone(),$t2->clone(),$t6->clone(),$t7->clone()]);
            $students[] = new Student(44, 'Ann L.', 3.4, [$t12->clone(),$t4->clone(),$t6->clone(),$t16->clone(),$t9->clone(),$t15->clone(),$t13->clone()]);
            $students[] = new Student(45, 'Ann R.', 3.6, [$t2->clone()]);
            $students[] = new Student(46, 'Sarah H.', 3.6, [$t14->clone(),$t8->clone(),$t10->clone()]);
            $students[] = new Student(47, 'Dan C.', 3.4, [$t3->clone(),$t8->clone(),$t6->clone(),$t2->clone(),$t11->clone(),$t9->clone(),$t1->clone()]);
            $students[] = new Student(48, 'Jill U.', 4, [$t2->clone(),$t16->clone(),$t6->clone(),$t4->clone(),$t7->clone(),$t8->clone(),$t9->clone(),$t12->clone()]);
            $students[] = new Student(49, 'James O.', 3.2, [$t14->clone(),$t9->clone(),$t10->clone(),$t7->clone(),$t5->clone(),$t2->clone()]);
            $students[] = new Student(50, 'James B.', 3.2, [$t7->clone(),$t1->clone(),$t4->clone(),$t6->clone(),$t12->clone()]);
            
            $this->students = $students;

        }

        public function getStudents(){
            return $this->students;
        }

        public function getStudent($id){
            foreach($this->students as $student){
                if($student->getId() == $id){
                    return $student;
                }
            }
            return null;
        }
    }
?>