<?php
    
    ### DO NOT MODIFY THIS FILE ###
    
    class StudyGroup{
        private $id;
        private $members; # an indexed array of Student objects
        
        public function __construct($id, $members){
            $this->id = $id;
            $this->members = $members;
        }

        public function getId(){
            return $this->id;
        }
        
        public function getMembers(){
            return $this->members;
        }

        public function addMembers($new_members){
            if (!isset($this->members)){
                $this->members = [];
            }
            if(isset($new_members)){
                $this->members = array_merge($this->members,$new_members);
            }
        }

        public function addMember($new_member){
            if (!isset($this->members)){
                $this->members = [];
            }
            if(isset($new_member)){
                $this->members[] = $new_member;
            }
        }

        public function hasMember($student){
            if(isset($this->members)){
                foreach($this->members as $member){
                    if($member == $student){
                        return true;
                    }
                }
            }
            return false;
        }
    }
?>