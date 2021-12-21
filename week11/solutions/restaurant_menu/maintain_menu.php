<?php
    require_once "common.php";

    $dao = new FoodDAO();
    
    $food = $dao->retrieveAll();

    //var_dump($food);
    
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
            echo "<table>
                    <tr> 
                        <th>SKU</th> 
                        <th>Description</th> 
                        <th>Category</th> 
                        <th>Price</th> 
                        <th> </th>
                        <th> </th>
                    </tr>";

            foreach ($food as $food_obj){
                echo "<tr> 
                        <td>{$food_obj->getSKU()}</td>
                        <td>{$food_obj->getFoodDesc()}</td>
                        <td>{$food_obj->getcategory()}</td>
                        <td> \${$food_obj->getPrice()}</td>
                        <td> <a href='edit.php?id={$food_obj->getSKU()}'>Edit</a> </td>
                        <td> <a href='delete.php?id={$food_obj->getSKU()}'>Delete</a> </td>
                        </tr>";
            }
            echo "</table><br/>";
        ?>

        <h3> Add New Food Item </h3>
        <table>
            <tr>
                <td> SKU :</td> <td> <input type="numeric" name="sku" /> </td> 
            </tr>
            <tr>
                <td> Description : </td> <td> <input type="text" name="fooddesc" /></td> 
            </tr>
            <tr>
                <td> Category : </td> <td> <input type="text" name="category" /> </td>
            </tr>    
            <tr>
                <td> Price : </td> <td> <input type="numeric" name="price" /></td>
            </tr>
        </table>
    </br>  
    <input type="submit" value="Add Item"/> </br> </br>

    <?= $msg ?>
    </form>
    </body> 
</html>