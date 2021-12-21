<?php
	require_once "warehouse.php";
	require_once "product.php";
	$warehouse = new Warehouse();
	$products = [];	
	if(isset($_GET['category'])){
		$category_name = $_GET['category'];
		$products = $warehouse->searchByCategory($category_name);
		
		// var_dump($products);
	}
	$categories_list = $warehouse->getCategories();

?>

<html>
<head>
	<title>Product Search by Category</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Product Search by Category</h1>
	<!-- form here -->
	<form method="get">
	Category
	<!-- drop down list -->
	<select name='category'>
	<?php
	foreach($categories_list as $item){
		$selected = '';
		if($category_name == $item){
			$selected = 'selected';
		}
		echo "
		<option value='$item' $selected>$item</option>
		";
	}
	?>
	</select>
	
		
	
	<!-- submit button -->
	<input type="submit" value="Search"/>

	</form>
	
	<table>
	
	
	<?php
		if(count($products)>0){
		echo "<tr>
		<th> S/N </th>
		<th> Product </th>
		<th> Quantity </th>
		<th> Price </th>
		</tr>";
		$count = 1;
		foreach($products as $product){
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
	
	
	
	?>
	


	
	</table>
</body>
</html>
