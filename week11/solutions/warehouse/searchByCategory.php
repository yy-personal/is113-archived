<?php

require_once 'Warehouse.php';
require_once 'Product.php';

// init
$category_name = '';
$products = [];
$warehouse = new Warehouse();

// search by category?
if ( isset($_GET['category_name']) ) {
	$category_name = $_GET['category_name'];
	
	// find the products of the selected category
	$products = $warehouse->searchByCategory($category_name);
}


// Get the list of product categories for the drop down list
$categoryList = $warehouse->getCategories();

?>

<html>
<head>
	<title>Product Search by Category</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Product Search by Category</h1>
	
	<form method='get'>
		Category
		<select name='category_name'>
			<?php
				foreach ($categoryList as $item) {
					$selected = '';
					if ( $category_name == $item ) {
						$selected = 'selected';
					}
					echo "
						<option value='$item' $selected>$item</option>
					";
					
				}
			?>
		</select>
		<input type='submit' value='Search' />
	</form>
	
	
	<?php
		if ( count($products) > 0 ) {
			echo '
				<table>
				<tr>
					<th> S/N </th>
					<th> Product </th>
					<th> Quantity </th>
					<th> Price </th>
				</tr>
			';
			$sn = 1;
			foreach ($products as $product) {
				$name = $product->getProductName();
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
						<td style='$qty_css'> $qty </td>
						<td> \$$price </td>
					</tr>
				";
				$sn++;
			}
			echo '
				</table>
			';
		}
	?>
</body>
</html>
