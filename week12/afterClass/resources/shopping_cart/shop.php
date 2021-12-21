<?php
    require_once "autoload.php";
    // require_once 'process_shop.php';
    
    // var_dump($_SESSION);
    $dao = new ItemDAO();
    $results = $dao->retrieveAll();
?>
<html>
    <head>
        <style>
            table,th,td{
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
    <form method="get" action="process_shop.php">
        <table>
            <tr> 
                <th>Name</th> 
                <th>Price (S$)</th> 
                <th>Quantity</th> 
            </tr>
            <?php
            $counter = 1;
            foreach($results as $result){
                echo "<tr>";
                echo "<td>" . $result->getName() . "</td>";
                echo "<td>" . $result->getPrice() . "</td>";
                echo "<td> <input type='number' name='{$result->getName()}'> </td>";
                echo "</tr>";
                $counter++;
            }
            
            ?>
        </table>

        <br/><input type="submit" name="action" value="Add to Cart" />
        <br/><input type="submit" name="action" value="Clear Cart" />
    </form>
    </body> 
</html>



<?php
    ############## PART A ########################################
    // add code here to retrieve an array of item objects
    // stored in the session and display the results in a table
    // $cart = addToCart();
    // var_dump($_POST);
    session_start();
    // var_dump($_SESSION);
    if(isset($_SESSION["cart"])){
        $cart_array = $_SESSION["cart"];
        echo "Your Current Shopping Items:";
        echo "
        <table border='1'>
            <tr>
                <th>Item Name</th><th>Quantity</th><th>Price</th>
            </tr>";
            $total_price = 0;
            foreach($cart_array as $item){
                $name = $item->getName();
                $price = $item->getPrice();
                $quantity = $item->getQuantity();
                
                // var_dump($quantity);
                if($quantity!=''){
                    $price_to_add = $price * $quantity;
                    $total_price = $total_price+$price_to_add;
                    echo "
                <tr>
                    <td>$name</td>
                    <td>$quantity</td>
                    <td>$price</td>
                </tr>
                ";
                }
                
            }
            echo "
                <tr>
                
                <td>Total</td>
                <td></td>
                <td>$total_price</td>
                
                </tr>
                
            ";
        echo "
        </table>
        ";
        
    }
?>
  