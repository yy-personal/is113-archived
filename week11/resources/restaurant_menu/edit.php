<?php

require_once 'common.php';

$id = '';
if( isset($_GET['id']) ) {
    $sku = $_GET['id'];
// Complete your codes here


}


// Complete your codes here


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

            // Complete your codes here

            echo "<h3> Update Food Item </h3>";

            echo "
                <table>
                <tr>
                    <td> SKU : </td> <td> $sku </td>
                </tr>
                <tr>
                    <td> Description : </td> <td>  </td>
                </tr>
                <tr>
                    <td> Category: </td> <td> </td>
                </tr>
                <tr>
                    <td> Price : </td> <td>  </td>
                </tr>
                </table>";


            echo "
                <br>
                <input type='submit' value='Update Info'>
            ";
        }

      

       echo "</br></br> Click <a href='maintain_menu.php'>here</a> to return to Main Page";
    ?>

    </form>

</body>
</html>

