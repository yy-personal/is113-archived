<?php
// display.php 
// code to generate sample output

require_once 'common.php';

$dao = new ProductDAO();
$productArr = $dao->retrieveAll();

echo "<html><body>";
print_form($productArr);
echo "</body></html>";

function print_form($productArr) {
    // YOUR CODE GOES HERE
    echo "
    <form action='order.php' method='POST'>
    <table border='1'>
    <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Size</th>
    <tr>";
    foreach($productArr as $product){
        // var_dump($product);
        // echo "<hr>";
        // var_dump($details);
        $name = $product->getName();
        $price = $product->getPrice();
        $stock = $product->getStock();
        $product_id = $product->getID();
        echo"
        <tr>
            <td>{$name}</td>
            <td>{$price}</td>
            <td>
            <select name='item[]'>
                <option value=''>--Pick a size--</option>";
            if(!empty($stock)){
                foreach($stock as $size=>$quantity){
                    // var_dump($size);
                    // var_dump($quantity);
                    echo "<option value='{$product_id}-{$size}'>{$product_id}-{$size}</option>";
                }
            }
    }
    echo "
        </td>
    </tr>
    <tr>
        <td colspan='3'>
            <input type='submit' value ='order'>
        </td>
    </tr>
    ";
    }
    echo "
    </table>
    </form>
    ";
    

    

?>

