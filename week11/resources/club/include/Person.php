<?php

class Person {
	private $id;
	private $name;
	
	/**
	 * @param $id  Integer.
	 * @param $name  String.
	 */ 
	public function __construct($id, $name) {
		$this->id = $id;
		$this->name = $name;
	}
	
	/**
	 * @return Integer.  Unique identifier.
	 */
	public function getID() {
		return $this->id;
	}
	
	/**
	 * @return String.  
	 */
	public function getName() {
		return $this->name;
	}
		
}
