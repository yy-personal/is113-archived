<?php
    class Schedule{
        private $room_allocation;
        public function __construct($room_allocation){
            $this->room_allocation = $room_allocation;
        }
        public function getRoomAllocation(){
            return $this->room_allocation;
        }
    }
?>