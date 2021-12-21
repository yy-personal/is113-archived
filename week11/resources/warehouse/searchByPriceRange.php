<?php
require_once 'Product.php';
require_once 'Warehouse.php';
$products = new Warehouse();

if(isset($_GET['min_price']) && isset($_GET['max_price']))
{
	$max_price = $_GET['max_price'];
	$min_price = $_GET['min_price'];
	$productsAccordingToPriceRange = $products->searchByPriceRange($min_price,$max_price);
}
else{
	$productsAccordingToPriceRange = $products->searchByPriceRange(0,100);
}

?>

<html>
<head>
	<title>Product Search by Price Range</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Product Search by Price Range</h1>
	
	<!-- form here -->
	<form method="get">

	<?php
	if(isset($_GET['min_price']) && isset($_GET['max_price'])){
		echo "
		Min price
		<input name = 'min_price' value = '{$min_price}'>
		<br/>
		Max price
		<input name = 'max_price' value = '{$max_price}'>
		<br/>
		<input type='submit' value='Search'>
	
	";
	}
	else{
		echo "
		Min price
		<input type='number' name = 'min_price' value = '0'>
		<br/>
		Max price
		<input type='number' name = 'max_price' value = '100'>
		<br/>
		<input type='submit' value='Search'>
	
	";
	}
	
	
	?>
	</form>
		<table>
		<?php
		if(isset($_GET['min_price']) && isset($_GET['max_price'])){
			if($productsAccordingToPriceRange==False){
				echo "Nothing Found.";
			}
			else{
				echo "<tr>
				<th> S/N </th>
				<th> Product </th>
				<th> Quantity </th>
				<th> Price </th>
				</tr>";
				$count = 1;
				foreach($productsAccordingToPriceRange as $product){
					$price = '$'.$product->getPrice();
					$quantity = $product->getQuantity();
					$style = '';
					if($quantity<10){
						$style = "style='color:red;'";
					}
					elseif($quantity<20){
						$style = "style='color:orange;'";
					}
					echo 
					"
						<tr>
						<td> $count </td>
						<td> {$product->getProductName()} </td>
						<td {$style}> $quantity </td>
						<td> $price</td>
						</tr>
					";
					$count ++;
			}
			}
			
		}
		
		?>
	
		<!-- <tr>
			<td> S/N </td>
			<td> Product </td>
			<td> Category </td>
			<td style='color:red;'> Quantity < 10 </td>
			<td> Price </td>
		</tr>

		<tr>
			<td> S/N </td>
			<td> Product </td>
			<td> Category </td>
			<td style='color:orange;'> Quantity < 20 </td>
			<td> Price </td>
		</tr>

		<tr>
			<td> S/N </td>
			<td> Product </td>
			<td> Category </td>
			<td style='color:black;'> Quantity </td>
			<td> Price </td>
		</tr> -->

		
		</table>
	</body>
</html>
