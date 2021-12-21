<?php

session_start();
var_dump($_SESSION);

require_once 'data.php';

// Only authenticated users can proceed below
if( !isset($_SESSION['username']) ) {
    $_SESSION['warning'] = 'Login first!';
    header('Location: login.php');
    return; // exit;
}

$username = $_SESSION['username'];

?>
<!DOCTYPE html>
<html>
<head>
    <title>Mama Shop</title>
</head>

<body>

<h1>
    Hello! Welcome <?= $username ?>
</h1>

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
            // Each row --> an item
            // Indexed Array of Store objects
            foreach($inventory_array as $storeObject) {
                // var_dump($storeObject);

                $store_name = $storeObject->getName();
                $items = $storeObject->getItems();
                // var_dump($items);

                $rowspan = count($items); // # of items

                $is_first_item = True;
                foreach($items as $itemObj) {
                    // var_dump($itemObj);

                    $item_description = $itemObj->getDescription();
                    // each item

                    echo "
                    <tr>"; // Every row has this


                    // How do I know... as I loop through multiple items..
                    // That this iteration is the 1st item?
                    if( $is_first_item ) {
                        echo "
                            <td rowspan='$rowspan'> $store_name </td>";
                        // Only 1st row of $store_name has this
                        // Subsequent row(s) of $store_name omits this
                        $is_first_item = False;
                    }

                    echo "
                        <td> {$itemObj->getId()} </td>
                        <td> $item_description </td>
                    </tr>
                    "; // Every row has this
                }
            }

        ?>
        
    </table>

    <br>

</form>

<hr>
Click <a href="display.php">here</a> to Reset

</body>

</html>