<?php

/*
purchase.php must display the following table with user input:

Your Purchase
+-----+--------+-------+----------+-----------+
| S/N | Name   | Price | Quantity | Sub-Total |
+-----+--------+-------+----------+-----------+ 
| 1   | <name> | <$$$> |   <num>  | <$$$>     |
+-----+--------+-------+----------+-----------+ 
| 2   | <name> | <$$$> |   <num>  | <$$$>     |
+-----+--------+-------+----------+-----------+ 
| ..  | ..     | ...   | ...      | ...       |
+-----+--------+-------+----------+-----------+ 
| n   | <name> | <$$$> |   <num>  | <$$$>     |
+-----+--------+-------+----------+-----------+ 
|                          Total: | <$$$>     |
+-----+--------+-------+----------+-----------+ 

*/


// By importing this file, we can access $drinks (Array of 5 Drink objects)
// Relative path (drinks.php is in the same directory as this file)
require_once 'drinks.php';

if( !isset($_POST['quantity1']) || !isset($_POST['quantity2']) || !isset($_POST['quantity3']) ||
         !isset($_POST['quantity4']) || !isset($_POST['quantity5']) ) {
    //Redirect to index.php
    header('Location: index.php');
}
?>
<html>
<head>
    <title>Korean Drinks Shop - Purchase Summary</title>
</head>
<body>

    <table border='1'>
        <tr>
            <th>S/N</th>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Sub-Total</th>
        </tr>
        
        <?php
            $count = 1;
            $total = 0;
            foreach($drinks as $drink) {
                //$drink is a Drink object
                $quantity = $_POST['quantity' . $count];
                $subtotal = $quantity * $drink->getPrice();
                echo "
                    <tr>
                        <td>$count</td>
                        <td>{$drink->getName()}</td>
                        <td>{$drink->getPrice()}</td>
                        <td>$quantity</td>
                        <td>$subtotal</td>
                    </tr>
                ";
                
                $count++; // Increment S/N counter
                $total += $subtotal;
            }
        ?>

        <tr>
            <td colspan='4' align='right'>Total</td>
            <td><?=$total?></td>
        </tr>
    </table>
</form>
</body>
<html>