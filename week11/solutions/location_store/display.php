<?php
    require_once "common.php";
    $shopdao = new ShopDAO();
    $shop_location_list = [];
    $shop_location_list = $shopdao->retrieveAllLocation();

    $shop_storename_list = $shopdao->retrieveAllStoreName();

    if (isset($_POST["locations"])){
        $sel_location = $_POST["locations"];
    }
    else
        $sel_location = $shop_location_list[0];
    
    if (isset($_POST["storenames"])){
        $sel_storename = $_POST["storenames"];
    }
    else
        $sel_storename = $shop_storename_list[0];

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
    
    <form method="POST" action="display.php">

        <?php    
            echo "<h3> Products Available for the location and store : </h3>";
            echo "Enter the location :
                 <select name='locations'>";
            foreach ($shop_location_list as $location){
                $selected = "";
                if ($location === $sel_location){
                    $selected = "selected";
                }
                echo "<option value = $location $selected > $location </option>";
            }
            echo "</select> <br/>";
        
            echo "Enter choose the shop name :
                  <select name='storenames'>";
        
            foreach ($shop_storename_list as $storename){
                $selected = "";
                if ($storename === $sel_storename){
                    $selected = "selected";
                }
                echo "<option value = $storename $selected> $storename </option>";
            }
            echo "</select> <br/>";

        ?>
        <br/>
        <input type="submit" value="Submit"/> </br> </br>
        
        <!-- Prepare the table with the list of products from the store -->


        <?php
        $status = [];
        $shop_obj = $shopdao->retrieveLocationStorename($sel_location,$sel_storename);

        if (!$shop_obj){
            echo "The location <strong>$sel_location</strong> does not have shop <strong>$sel_storename</strong>. <br/>";
        }
        else 
        {
            $prod_dao = new ProductDAO ();
            $product_list = $prod_dao->retrieveByShopName($sel_storename);

            if (count($product_list)==0){
                echo "The store <b> $sel_storename </b> in <b> $sel_location </b>
                      currently does not have any products for sale. <br/>";
            }  
            else {
            
                echo "The list of Products available at <b> $sel_storename </b> in 
                    <b> $sel_location </br></br>";
                echo "<table>
                    <tr> 
                        <th>Item</th> 
                        <th>Category</th> 
                        <th>Price</th> 
                    </tr>";

                foreach ($product_list as $product){
                    echo "<tr> 
                            <td>{$product->getItem()}</td>
                            <td>{$product->getcategory()}</td>
                            <td> \${$product->getPrice()}</td>
                        </tr>";
                    }
                
                echo "</table>";
                }    
        }
        
        ?>  
        
    </form>
    </body> 
</html>