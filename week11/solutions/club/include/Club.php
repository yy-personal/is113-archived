<?php

class Club {
	private $id;
	private $name;
	private $active;
	
	/**
	 * @param $id  Integer.
	 * @param $name  String.
	 * @param $active  Boolean,
	 */ 
	public function __construct($id, $name, $active) {
		$this->id = $id;
		$this->name = $name;
		$this->active = $active;
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
	
	/**
	 * @return Boolean.  
	 */
	public function isActive() {
		return $this->active;
	}
	
	/**
	 * @param $name  String
	 */ 
	public function setName($name) {
		$this->name = $name;
	}
	
	/**
	 * @param $active  Boolean
	 */ 
	public function setActive($active) {
		$this->active = $active;
	}
	
}
