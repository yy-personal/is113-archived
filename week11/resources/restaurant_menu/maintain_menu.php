<?php
    require_once "common.php";


    // Call DAO to get the data from the database.

    $dao = new FoodDAO();
    $food = $dao->retrieveAll();


    //

    $msg = "";
    $status = false;

    if  ( (isset($_POST["sku"]) ) && 
          ($_POST["sku"] != "")   &&
          (isset($_POST["fooddesc"]) ) &&
          ($_POST["fooddesc"] != "")   &&
          (isset($_POST["category"]) ) &&
          ($_POST["category"] != "")   &&
          (isset($_POST["price"]) ) &&
          (is_numeric($_POST["price"])) )
    {
        $add_sku = $_POST["sku"];
        $add_foodDesc = $_POST["fooddesc"];
        $add_category = $_POST["category"];
        $add_price = $_POST["price"];

        $status = $dao->addFood($add_sku, $add_foodDesc, $add_category, $add_price);

        if ($status == TRUE){
            $msg = "Food item : <strong> $add_foodDesc </strong> inserted into the menu.</h4>";
            $food = $dao->retrieveAll();
        }
        else
            $msg = "<h4>Error in creating food item : $add_foodDesc. Check your data.</h4><br/>";
    }
    
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
    
    <form method="POST" >

        <h2> Food Menu at IS113 Kiosk </h2>

        <?php


        // Display table of the list of food items 
        // SKU, Description, Category, Price
        
        
        ?>


        <!-- complete the codes to allow user to add in items -->
        
        <h3> Add New Food Item </h3>
        <table>
            <tr>
                <td> SKU :</td> <td>  </td> 
            </tr>
            <tr>
                <td> Description : </td> <td> </td> 
            </tr>
            <tr>
                <td> Category : </td> <td>  </td>
            </tr>    
            <tr>
                <td> Price : </td> <td> </td>
            </tr>
        </table>
    </br>  
    <input type="submit" value="Add Item"/> </br> </br>

    <?= $msg ?>
    </form>
    </body> 
</html>