<?php
require_once 'Product.php';
require_once 'Warehouse.php';
$warehouse = new Warehouse();
$categories_list = $warehouse->getCategories();
?>
<html>
<head>
	<title>Product Category List</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Product Category List</h1>
	<ol>
	
	<?php
		foreach($categories_list as $category){
			echo "
				<li><a href='./searchByCategory.php?category_name={$category}'>$category</a></li>
			";
				
			
		}
	?>
	</ol>
</body>
</html>
