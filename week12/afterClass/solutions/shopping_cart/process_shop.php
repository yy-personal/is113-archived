<?php
   require_once "autoload.php";

    if(isset($_GET["action"]) && $_GET["action"] == "Add to Cart") {
       addToCart();
    } elseif (isset($_GET["action"]) && $_GET["action"] == "Clear Cart") {
       clearCart();
    } else {
        header("Location: shop.php");
    }

    function addToCart() {
        $dao = new ItemDAO();
        $results = $dao->retrieveAll();
        $items = [];

         ############## PART B ########################################
         // add code to add new items into current shopping cart in session
        
        foreach($results as $result){ 
            $name = $result->getName();
            if(!empty($_GET[$name])) {
                $price = $result->getPrice();
                $quantity = $_GET[$name];
              
                $item = new Item($name, $price); 
                $item->setQuantity($quantity);
                $items[] = $item;
            }
        }

        if(!empty($items)) {
            session_start();
            if(isset($_SESSION["cart"])) {
                // if there are already existing items, add those into current items[]
                $existing_items = $_SESSION["cart"];
                foreach ($existing_items as $existing_item) {
                    $items[] = $existing_item;
                }
               
            } 
            $_SESSION["cart"] = $items; 
            echo "Shopping Items added into session. Please continue to shop!";
            var_dump($_SESSION["cart"]);
        } else {
            echo "No shopping items selected. Please continue to shop!";
        }
    }
    
    function clearCart() {
         ############## PART C ########################################
        // add code to clear shopping cart here
        session_start();
        if(isset($_SESSION["cart"])) {
            unset($_SESSION["cart"]);
        }
        echo "Shopping Cart Cleared. Please continue to Shop!";
    }


?>

<html>
    <body>

        <form method="post" action="shop.php">

            <input type="submit" value="Continue Shopping!" />

        </form>

    </body>
</html>

