<?php

require_once 'Warehouse.php';
require_once 'Product.php';

// init
$category_name = '';
$products = [];
$warehouse = new Warehouse();

?>

<html>
<head>
	<title>Test searchByCategory()</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Test searchByCategory()</h1>

    <?php
        $category_names = ['Seafood','Sweets and Chocolate', 'No such category'];
        foreach ($category_names as $category_name) {
            echo "
                <h2> $category_name </h2>
			";

            // find the products of the selected category
            $products = $warehouse->searchByCategory($category_name);

            if ( count($products) > 0 ) {
                foreach ($products as $product) {
                    $name = $product->getProductName();
                    $qty = $product->getQuantity();
                    
                    echo "
                        $name, $qty, {$product->getPrice()}<br/>
                    ";
                }    
            } else {
                echo "
                    Nothing found.<br/>
                ";
            }
		}
	?>
</body>
</html>
