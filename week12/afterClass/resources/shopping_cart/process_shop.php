<?php
   require_once "autoload.php";
   session_start();

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
        // var_dump($results);
        // var_dump($_GET);
        $count = 0;
        $items = [];
        foreach($results as $item){
            // var_dump($item);
            $quantity_input = $_GET[$item->getName()];
            // var_dump($quantity_input);
            $item->setQuantity($quantity_input);
            $count++;
            $items[] = $item;
        }
        // var_dump($results);
        // var_dump($items);
        
        ############## PART B ########################################
         // add code to add new items into current shopping cart in session
        
        $_SESSION["cart"] = $items; 
        var_dump($_SESSION["cart"]);
        echo "Shopping items added into session.";
        return;
    }

    function clearCart() {
        ############## PART C ########################################
        // add code to clear shopping cart here
        unset($_SESSION['cart']);
    }

   
    
   

?>

<html>
    <body>

        <form method="post" action="shop.php">

            <input type="submit" value="Continue Shopping!" />

        </form>

    </body>
</html>

