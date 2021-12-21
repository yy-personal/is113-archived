<?php

/**
 * Class representing a product
 */ 
class Product {
	// properties
	private $productName;
	private $categoryName;
	private $quantity;
	private $price;
	
	/**
	 * Constructor
	 * @param $productName  
	 * 		Name of this product
	 * @param $categoryName
	 * 		Category that this product belongs to
	 * @param $quantity
	 * 		How many of this product are there in stock
	 * @param $price
	 * 		Unit price of this product
	 */ 
	public function __construct($productName, $categoryName, $quantity, $price) {
		$this->productName = $productName;
		$this->categoryName = $categoryName;
		$this->quantity = $quantity;	
		$this->price = $price;	
	}
	
	// METHODS
	
	/**
	 * @return String - Name of this product
	 */ 
	public function getProductName() {
		return $this->productName;
	}
	
	/**
	 * @return String - Category that this product belongs to
	 */ 
	public function getCategoryName() {
		return $this->categoryName;
	}
	
	/**
	 * @return Integer - How many of this product are there in stock
	 */ 
	public function getQuantity() {
		return $this->quantity;
	}
	
	/**
	 * @return Float - Unit price of this product
	 */ 
	public function getPrice() {
		return $this->price;
	}
	
}
