<?php
    class LectureDAO{
        private $lectures;
        
        public function __construct(){
            $this->lectures['03/04/2019'] = [   new Lecture("L1",9,1),
                                                new Lecture("L4",11,1),
                                                new Lecture("L5",9,3)];
            
            $this->lectures['04/04/2019'] = [   new Lecture("L1",9,1),
                                                new Lecture("L4",15,1),
                                                new Lecture("L7",9,3),
                                                new Lecture("L2",11,1),
                                                new Lecture("L3",13,1),
                                                new Lecture("L6",13,1),
                                                new Lecture("L5",15,1),
                                                new Lecture("L10",9,1),
                                                new Lecture("L9",11,3),
                                                new Lecture("L8",14,3)];
        }

        # Get lectures that fall on a particular date
        public function getLectures($date){
            if(array_key_exists($date,$this->lectures)){
                return $this->lectures[$date];
            }
            else{
                return null;
            }
        }
    }
?>