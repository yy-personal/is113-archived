<?php
// display.php 
// code to generate sample output

require_once 'common.php';

$dao = new ProductDAO();
$productArr = $dao->retrieveAll();
var_dump($productArr);
echo "<html><body>";
print_form($productArr);
echo "</body></html>";

function print_form($productArr) {
    // YOUR CODE GOES HERE
    
    echo"
    <form action='order.php' method='POST'>
    <table border = '1'>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Size</th>
        </tr>
        ";
        foreach($productArr as $product){
            echo"
            <tr>
            <td>
                {$product->getName()}
            </td>
            <td>
                {$product->getPrice()}
            </td>
            <td>
                <select name ='item[]'> ";
                echo"<option value = '' selected>--Pick a size--</option>";
                foreach($product->getStock() as $size=>$quantity){
                    if($quantity>0){
                    echo"
                    <option value ='{$product->getID()}-$size'>{$product->getID()}-$size</option>
                    ";
                    }
                    
                }
                    
                echo"
            </select>
            </td>
            </tr>

            ";
        }
        echo"
            <tr>
                <td colspan='3'><input type='submit' value = 'order'><td>
            </tr>
            ";
    echo"
    </table>
    ";

    }

?>

