<?php

session_start();
var_dump($_SESSION);

// IMPORTANT
// Only authenticated users should be able to view the content below
// we need to PROTECT this page
if( !isset($_SESSION['username']) ) {
    // damn sure this guy illegal
    $_SESSION['warning'] = "Hey... crazy? Login first ah";
    header('Location: login.php');
    return; // exit;
}

// require_once 'include/StoreDAO.php';
// $dao = new StoreDAO();
// $inventory_array = $dao->getAllStores();

require_once 'data.php';

?>
<!DOCTYPE html>
<html>
<head>
    <title>Mama Shop</title>
</head>

<body>

<h2>
    <a href="logout.php">Log Out</a>
</h2>

<h1>Pyongyang's Best Mama Shop</h1>

<form action='process.php' method='POST'>

    <font size='5'><b>Items Available</b></font>

    <table border='1'>

            <tr>
                <th>Store</th>
                <th>Item ID</th>
                <th>Item Description</th>
            </tr>

        <?php
            // Each row is an item
            // $inventory_array is an Indexed Array of Store objects
            // foreach($inventory_array as $store_name=>$store_details) {
            foreach($inventory_array as $storeObject) {
                $store_name = $storeObject->getName(); // String
                $items = $storeObject->getItems(); // indexed array of Item objects
                // var_dump($items);

                $rowspan = count($items); // # of item key-value pairs for this store
                $is_first_item = True;

                foreach($items as $itemObject) {
                    // var_dump($itemObject);

                    $item_id = $itemObject->getId();
                    $item_desc = $itemObject->getDescription();

                    echo "
                    <tr>"; // Every item has this

                    // How do I know that this is the 1st occurrence/item
                    // of this $store_name?
                    if( $is_first_item ) {
                        echo "
                        <td rowspan='$rowspan'> $store_name </td>";
                        // 1st occurrence/item of a new $store_name shud have this
                        $is_first_item = False;
                    }
                    
                    echo "
                        <td> $item_id </td>
                        <td> $item_desc </td>
                    </tr>
                    "; // Every item has this

                }
            }
        ?>
        
    </table>

</form>

<hr>
Click <a href="display.php">here</a> to Reset

</body>

</html>