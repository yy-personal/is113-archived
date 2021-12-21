<?php

require_once 'Warehouse.php';
require_once 'Product.php';

// init
$category_names = [];
$min_price = 0;
$max_price = 100;
$category_products = false;
$warehouse = new Warehouse();

// search by category and price range?
if ( isset($_GET['min_price']) ) {  // if form submitted, text box will sure have value.
	
	if ( isset($_GET['category_names']) ) {
		$category_names = $_GET['category_names'];
	} else { // none checked
		$category_names = [];
	}
	$min_price = trim($_GET['min_price']);
	$max_price = trim($_GET['max_price']);
	
	// find the products of the selected category
	$category_products = $warehouse->searchByCategoriesPriceRange($category_names, $min_price, $max_price);
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
		<table>
			<tr>
				<th>
					Categories: 
				</th>
				<td>
					<?php
						$num_categories = count($categoryList);
						for ($i = 0; $i < $num_categories; $i++) {
							$item = $categoryList[$i];

							$checked = '';
							if ( in_array($item, $category_names) ) {
								$checked = 'checked';
							}

							echo "
								<label>
									<input type='checkbox' name='category_names[]' value='$item' $checked />
									$item
								</label>
							";
							if ($i % 5 == 4) {
								echo '
									<br>
								';
							}
						}
					?>
				</td>
			</tr>
			<tr>
				<th>
					Min price
				</th>
				<td>
					<input name='min_price' value='<?=$min_price?>' />
				</td>
			</tr>
			<tr>
				<th>
					Max price
				</th>
				<td>
					<input name='max_price' value='<?=$max_price?>' />
				</td>
			</tr>
		</table>
		<input type='submit' value='Search' />
	</form>
	
	
	<?php
	if ($category_products !== false) {
		// form was submitted
		if ( count($category_products) > 0 ) {
			echo '
				<table>
				<tr>
					<th> S/N </th>
					<th> Category </th>
					<th> Product </th>
					<th> Quantity </th>
					<th> Price </th>
				</tr>
			';
			$sn = 1;
			foreach ($category_products as $category => $products) {

				$rowspan_count = count($products);
				$category_name_cell = "
					<td rowspan='$rowspan_count'>
						$category
					</td>
				";

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
							$category_name_cell
							<td> $name </td>
							<td style='$qty_css'> $qty </td>
							<td> \$$price </td>
						</tr>
					";

					$category_name_cell = '';
					$sn++;
	
				}
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
