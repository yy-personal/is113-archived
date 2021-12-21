<?php

require_once 'ConnectionManager.php';
require_once 'Product.php';

/**
 * This class provides product-related retrieval/search functions.
 */ 
class Warehouse {

	/**
	 * Retrieve the list of product categories sorted alphabetically (case-sensitive) in ascending order.
	 * 
	 * @return Indexed array of Strings - product categories sorted alphabetically (case-sensitive) in ascending order.
	 */ 
    public function getCategories() {
        // Sample SQL
        // SELECT category_name FROM category ORDER BY category_name
        $categories = [];
        $conn = new ConnectionManager();
        $pdo = $conn->connect();
        $sql = "SELECT category_name from category ORDER BY category_name";
        $stmt = $pdo->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        while($row = $stmt->fetch()){
            $categories[] = $row['category_name'];
            // $product_name, $category_name, $quantity, $price
        }
        $stmt = null;
        $pdo = null;

        return $categories;
    }
    
    
    /**
     * @param $category_name  Product category to search for
     * @return Indexed array of Product objects for the specified category 
     * sorted by products' name alphabetically (case-sensitive) in ascending order.
     */ 
    public function searchByCategory($category_name) {
        // Sample SQL: For category 'Seafood'
        // SELECT product_name, category_name, quantity, price FROM product 
        // WHERE category_name = 'Seafood'
        // ORDER BY product_name

        $products = [];
        $conn = new ConnectionManager();
        $pdo = $conn->connect();
        $sql = "Select * from product where category_name = :category_name";
        $stmt = $pdo->prepare($sql);
        $stmt ->bindParam(':category_name', $category_name, PDO:: PARAM_STR);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        while($row = $stmt->fetch()){
            $products[] = new product($row['product_name'],$row['category_name'],$row['quantity'],$row['price']);
            // $product_name, $category_name, $quantity, $price
        }
        $stmt = null;
        $pdo = null;
        return $products;
    }

    /**
     * @param $min_price  Float. Minimum price to search for
     * @param $max_price  Float. Maximum price to search for
     * @return 
     * Indexed array of Product objects whose price is between $min_price and $max_price inclusive. 
     * The products are sorted by price, then product’s name alphabetically (case-sensitive) in ascending order.
     */ 
    public function searchByPriceRange($min_price, $max_price) {
        // Sample SQL: For min price is 2.5 and max price is 10.5
        // SELECT product_name, category_name, quantity, price FROM product 
		// WHERE 2.5 <= price AND price <= 10.5
        // ORDER BY price, product_name

        $products = [];
        $conn = new ConnectionManager();
        $pdo = $conn->connect();
        $sql = "SELECT * FROM product WHERE price>=:min_price and price<=:max_price ORDER BY PRICE, PRODUCT_NAME";
        $stmt = $pdo->prepare($sql);
        $stmt ->bindParam(':min_price', $min_price, PDO:: PARAM_STR);
        $stmt ->bindParam(':max_price', $max_price, PDO:: PARAM_STR);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        while($row = $stmt->fetch()){
            $products[] = new product($row['product_name'],$row['category_name'],$row['quantity'],$row['price']);
            // $product_name, $category_name, $quantity, $price
        }
        $stmt = null;
        $pdo = null;
        return $products;
    }


    
    /**
     * @param $category_names  Indexed array of String.  Categories to search for
     * @param $min_price  Float.  Minimum price to search for
     * @param $max_price  Float.  Maximum price to search for
     * @return  Associative array. 
     * Key is product category name
     * Value is an indexed array of Product objects for the specified category and 
     *      whose price is between $min_price and $max_price inclusive.
     *      The products are sorted by category name then product's name alphabetically
     *      (case-sensitive) in ascending order.
     */ 
    public function searchByCategoriesPriceRange($category_names, $min_price, $max_price) {
        // Sample SQL: For min price is 2.5 and max price is 10.5, categories 'Seafood', 'Alcoholic Drink'
        // SELECT product_name, category_name, quantity, price FROM product 
        // WHERE 2.5 <= price AND price <= 10.5
        // 	AND category_name IN ( 'Seafood', 'Alcoholic Drink' )
        // ORDER BY category_name, product_name

        $category_products = [];
        $categoryParameters = "''";
        $num_categories = count($category_names);
        $conn = new ConnectionManager();
        $pdo = $conn->connect();
        $sql = "SELECT * FROM product WHERE price>=:min_price AND price<=:max_price AND category_name IN ($categoryParameters) ORDER BY category_name, product_name";
        $stmt = $pdo->prepare($sql);
        $stmt ->bindParam(':min_price', $min_price, PDO:: PARAM_STR);
        $stmt ->bindParam(':max_price', $max_price, PDO:: PARAM_STR);
        for ( $i = 0; $i < $num_categories; $i++) {
			$stmt->bindParam(":category_name$i", $category_names[$i], PDO::PARAM_STR);
		}
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        while($row = $stmt->fetch()){
            $category_products[] = new product($row['product_name'],$row['category_name'],$row['quantity'],$row['price']);
            // $product_name, $category_name, $quantity, $price
        }
        $stmt = null;
        $pdo = null;

        return $category_products;
    }

}
