<?php
    require_once "common.php";

    /* Enter code here */
    /* Retrieve list of locations and shop name */

    
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
            
            /* Enter codes here ....                                                         */
            /* display them in a dropdown list. It remembers the value that the user select. */
            
            
            ?>
        <br/>
        <input type="submit" value="Submit"/> </br> </br>
        
        <!-- Prepare the table with the list of products from the store -->


        <?php
        
        /* Enter codes here to display the product list, if available or error statements */
        
        
        ?>  

    </form>
    </table>
    </body> 
</html>