<?php

require_once 'Warehouse.php';
require_once 'Product.php';

// init
$min_price = 0;
$max_price = 100;
$products = false;
$warehouse = new Warehouse();


?>

<html>
<head>
	<title>Test searchByPriceRange()</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Test searchByPriceRange()</h1>
	
	
	
    <?php
    $priceRanges = [
        [1.2, 1.6],
        [10, 18],
        [100.0, 100.0]
    ];
    foreach ($priceRanges as $priceRange) {
        $min_price = $priceRange[0];
        $max_price = $priceRange[1];
        echo "
            <h2>Between \$$min_price and \$$max_price</h2>
        ";

        // find the products of the selected category
        $products = $warehouse->searchByPriceRange($min_price, $max_price) ;
		// form was submitted
		if ( count($products) > 0 ) {
			$sn = 1;
			foreach ($products as $product) {
				$name = $product->getProductName();
				$categoryName = $product->getCategoryName();
				$qty = $product->getQuantity();
				$price = number_format( $product->getPrice(), 2 );
				
				echo "
					$name, $categoryName, $qty, \$$price <br/>
				";
				$sn++;
			}
		} else {
			echo '
				Nothing found.
			';
		}

    } //foreach		
	?>
</body>
</html>
