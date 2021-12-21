<?php

require_once 'Warehouse.php';
require_once 'Product.php';

// init
$warehouse = new Warehouse();


// Get the list of product categories for the drop down list
$categoryList = $warehouse->getCategories();

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
		foreach ($categoryList as $item) {
			echo "
				<li>
					<a href='searchByCategory.php?category_name=$item'>$item</a>
				</li>
			";			
		}
	?>
	</ol>			
</body>
</html>
