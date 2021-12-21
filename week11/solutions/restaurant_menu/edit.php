<?php

require_once 'common.php';

$id = '';
if( isset($_GET['id']) ) {
    $sku = $_GET['id'];

    $dao = new FoodDAO();
    $food_object = $dao->getFoodbyID($sku); 
    
    $foodDesc = $food_object->getFoodDesc();
    $category = $food_object->getCategory();
    $price = $food_object->getPrice();
    
}


$msg = '';
$status = false;
$data_updated = false;
if ( isset($_POST['foodDesc']) && isset($_POST['category']) && 
     isset($_POST['price']) ) 
{
    $foodDesc = $_POST['foodDesc'];
    $category = $_POST['category'];
    $price = $_POST['price'];

    $status = $dao->UpdateFood($sku, $foodDesc, $category, $price);
    
    if ( $status ) {
            $msg = " <br/><br/>Food item : <strong> $foodDesc </strong> updated successfully.";
        }
    else {
            $msg =  "<h3> The update was NOT successful!</h3>";
    }

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

    <form method='POST'>

    <?php
        if($food_object) {

            // Hidden Input
            // echo "
            //    <input type='hidden' name='id' value='{$sel_food->getSKU()}'>
            //";

            echo "<h3> Update Food Item </h3>";

            echo "
                <table>
                <tr>
                    <td> SKU : </td> <td> $sku </td>
                </tr>
                <tr>
                    <td> Description : </td> <td> <input type='text' name='foodDesc' value='{$foodDesc}' </td>
                </tr>
                <tr>
                    <td> Category: </td> <td> <input type='text' name='category' value='{$category}' </td>
                </tr>
                <tr>
                    <td> Price : </td> <td> <input type='text' name='price' value='{$price}' </td>
                </tr>
                </table>";


            echo "
                <br>
                <input type='submit' value='Update Info'>
            ";
        }

       echo $msg;
       
       echo "<br>";

       echo "</br></br> Click <a href='maintain_menu.php'>here</a> to return to Main Page";
    ?>

    </form>

</body>
</html>

