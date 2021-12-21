<?php

require_once 'ConnectionManager.php';
require_once 'Product.php';

/**
 * This class provides product-related retrieval/search functions.
 */ 
class Warehouse {

	/**
	 * Retrieve the list of product categories sorted alphabetically in ascending order.
	 * 
	 * @return Indexed array of Strings - product categories sorted alphabetically (case-sensitive) in ascending order.
	 */ 
    public function getCategories() {
        $connMgr = new ConnectionManager();
        $conn = $connMgr->connect();

        $sql = "SELECT category_name FROM category ORDER BY category_name";
        $stmt = $conn->prepare($sql);

        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        $categories = [];
        while ($row = $stmt->fetch() ) {
            $categories[] = $row['category_name'];
        }

        $stmt = null;
        $conn = null;        

        return $categories;
    }
    
    
    /**
     * @param $category_name  Product category to search for
     * @return Indexed array of Product objects for the specified category 
     * sorted by products' name alphabetically (case-sensitive) in ascending order.
     */ 
    public function searchByCategory($category_name) {
        $connMgr = new ConnectionManager();
        $conn = $connMgr->connect();

        $sql = "
			SELECT product_name, category_name, quantity, price FROM product 
            WHERE category_name = :category_name 
            ORDER BY product_name
        ";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':category_name', $category_name, PDO::PARAM_STR);

        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        $products = [];
        while ($row = $stmt->fetch() ) {
            $products[] = new Product( 
									$row['product_name'], 
									$row['category_name'], 
									$row['quantity'], 
									$row['price']
								);
        }

        $stmt = null;
        $conn = null;        

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
        $connMgr = new ConnectionManager();
        $conn = $connMgr->connect();

        $sql = "
			SELECT product_name, category_name, quantity, price FROM product 
			WHERE :min_price <= price AND price <= :max_price 
            ORDER BY price, product_name
        ";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':min_price', $min_price, PDO::PARAM_STR);
        $stmt->bindParam(':max_price', $max_price, PDO::PARAM_STR);

        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        $products = [];
        while ($row = $stmt->fetch() ) {
            $products[] = new Product( 
									$row['product_name'], 
									$row['category_name'], 
									$row['quantity'], 
									$row['price']
								);
        }

        $stmt = null;
        $conn = null;        

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
        $connMgr = new ConnectionManager();
        $conn = $connMgr->connect();

		
		$categoryParameters = "''";
		$num_categories = count($category_names);
		for ( $i = 0; $i < $num_categories; $i++) {
			$categoryParameters .= ", :category_name$i";
		}

		$sql = "
			SELECT product_name, category_name, quantity, price FROM product 
			WHERE :min_price <= price AND price <= :max_price 
				AND category_name IN ( $categoryParameters )
            ORDER BY category_name, product_name
        ";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':min_price', $min_price, PDO::PARAM_STR);
        $stmt->bindParam(':max_price', $max_price, PDO::PARAM_STR);
		for ( $i = 0; $i < $num_categories; $i++) {
			$stmt->bindParam(":category_name$i", $category_names[$i], PDO::PARAM_STR);
		}

        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        $category_products = [];
        while ($row = $stmt->fetch() ) {
            $category_name = $row['category_name'];
            $product = new Product( 
                                $row['product_name'], 
                                $category_name, 
                                $row['quantity'], 
                                $row['price']
                            );

            
            if ( isset($category_products[$category_name]) ) {
                // this key aka category exists
                $productArr = $category_products[$category_name];
            } else {
                // first product for this category.
                $productArr = [];
            }
            $productArr[] = $product;
            $category_products[$category_name] = $productArr;
        }

        $stmt = null;
        $conn = null;        

        return $category_products;
    }

}
