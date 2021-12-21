<?php

require_once 'Warehouse.php';
require_once 'Product.php';

// init
$min_price = 0;
$max_price = 100;
$products = false;
$warehouse = new Warehouse();

// search by min/max prices?
if ( isset($_GET['min_price']) && isset($_GET['max_price']) ) {
	$min_price = $_GET['min_price'];
	$max_price = $_GET['max_price'];
	
	// find the products of the selected category
	$products = $warehouse->searchByPriceRange($min_price, $max_price) ;
}

?>

<html>
<head>
	<title>Product Search by Price Range</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Product Search by Price Range</h1>
	
	
	<form method='get'>
		Min price <input name='min_price' value='<?=$min_price?>' /><br/>
		Max price <input name='max_price' value='<?=$max_price?>' /><br/>
		<input type='submit' value='Search' />
	</form>
	
	
	<?php
	if ( $products !== false ) {
		// form was submitted
		if ( count($products) > 0 ) {
			echo '
				<table>
				<tr>
					<th> S/N </th>
					<th> Product </th>
					<th> Category </th>
					<th> Quantity </th>
					<th> Price </th>
				</tr>
			';
			$sn = 1;
			foreach ($products as $product) {
				$name = $product->getProductName();
				$categoryName = $product->getCategoryName();
				$qty = $product->getQuantity();
				$price = number_format( $product->getPrice(), 2 );
				
				if ($qty < 10 ) {
					$qty_css = 'color:red;';
				} elseif ($qty < 20 ) {
					$qty_css = 'color:orange;';
				} else {
					$qty_css = 'color:black;';
				}
				
				echo "
					<tr>
						<td> $sn </td>
						<td> $name </td>
						<td> $categoryName </td>
						<td style='$qty_css'> $qty </td>
						<td> \$$price </td>
					</tr>
				";
				$sn++;
			}
			echo '
				</table>
			';
		} else {
			echo '
				Nothing found.
			';
		}
	}
		
	?>
</body>
</html>
