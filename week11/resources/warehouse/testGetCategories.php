<?php

require_once 'Warehouse.php';

$warehouse = new Warehouse();
$categoryList = $warehouse->getCategories();

?>

<html>
<head>
	<title>Test getCategories()</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Test getCategories()</h1>
	
    <?php
        foreach ($categoryList as $item) {
            echo "
                $item<br>
            ";
            
        }
    ?>
</body>
</html>
