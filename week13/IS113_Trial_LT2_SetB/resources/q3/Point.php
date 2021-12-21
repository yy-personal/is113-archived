<?php
	class Point{
		private $row_id; 
		private $col_id;
		
		public function __construct($row_id,$col_id){
			$this->row_id = $row_id;
			$this->col_id = $col_id;
		}

		public function getRow_id(){
			return $this->row_id;
		}

		public function getCol_id(){
			return $this->col_id;
		}

		public function setRow_id($row_id){
			$this->row_id = $row_id;
		}

		public function setCol_id($col_id){
			$this->col_id = $col_id;
		}

	}
?>

