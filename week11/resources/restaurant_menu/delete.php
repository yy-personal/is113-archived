<?php

require_once 'common.php';


    // Add your codes here


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

           // Complete your codes here

            echo "<h3> Delete Item </h3>";

            echo "
                <table>
                    <tr>
                        <td> SKU : </td> <td>  </td> 
                    </tr>
                    <tr>
                        <td> Description : </td> <td>  </td>
                    </tr>
                    <tr>
                        <td> Category: </td> <td>  </td> <br>
                    </tr>
                    <tr> 
                        <td> Price : </td> <td>  </td> 
                    </tr>
                </table>
                <br/>";
                
            echo "<input type='submit' name='action' value='Confirm'> ";
        }
    
        // Add your codes here
    
    echo "</br></br> Click <a href='maintain_menu.php'>here</a> to return to Main Page";
    
    ?>

    </form>

   
</body>
</html>

