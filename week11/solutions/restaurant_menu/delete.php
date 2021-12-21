<?php

require_once 'common.php';

if( isset($_GET['id']) ) {
    $sku = $_GET['id'];

     $dao = new FoodDAO();
    $food_object = $dao->getFoodbyID($sku); 

    $foodDesc = $food_object->getFoodDesc();
    $category = $food_object->getCategory();
    $price = $food_object->getPrice();    

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

           
            echo "<h3> Delete Item </h3>";

            echo "
                <table>
                    <tr>
                        <td> SKU : </td> <td> $sku </td> 
                    </tr>
                    <tr>
                        <td> Description : </td> <td> $foodDesc </td>
                    </tr>
                    <tr>
                        <td> Category: </td> <td> $category </td> <br>
                    </tr>
                    <tr> 
                        <td> Price : </td> <td> $price </td> 
                    </tr>
                </table>
                <br/>";
                
            echo "<input type='submit' name='action' value='Confirm'> ";
        }
    
        $msg = '';
        $status = false;
        if ( isset($_POST['action'])){

            $status = $dao->DeleteFood($sku);
            
            if ( $status ) {
                    echo "<h3>Delete was successful!</h3>";
            }
            else {
            echo "<h3>Delete was NOT successful!</h3>";
            }
        }
    
    echo "</br></br> Click <a href='maintain_menu.php'>here</a> to return to Main Page";
    
    ?>

    </form>

   
</body>
</html>

