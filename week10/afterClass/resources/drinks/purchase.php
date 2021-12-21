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

var_dump($_POST);
var_dump($_POST['quantity3']);

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
            // YOUR CODE GOES HERE
            $counting = 1;
            $total = 0;
            foreach($drinks as $drink_obj){
                $quantity = $_POST['quantity'.$counting];
                $subtotal = $quantity * $drink_obj->getPrice();
                echo"
                <tr>

                    <td>{$counting}</td>

                    <td>{$drink_obj->getName()}</td>

                    <td>{$drink_obj->getPrice()}</td>

                    <td>{$quantity}</td>

                    <td>{$subtotal}</td>

                </tr>
                ";
                $total = $total + $subtotal;
                $counting = $counting+1;
            }

        ?>
        <tr>
            <td colspan="4" align="right">Total</td>
            <td><?php echo $total; ?></td>
        </tr>

    </table>
</form>
</body>
<html>