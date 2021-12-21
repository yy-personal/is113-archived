<!--
    Name: Lim Yin Yao
    Email: yinyao.lim.2020

-->
<?php

// use these Arrays to print the contents of the table.

$upgrade_info =     array (
                        array("Upgrade to 16GB RAM", 323),   
                        array("Upgrade to 16GB RAM + 512GB SSD", 433),
                        array("Upgrade to Premium Privacy Filter", 48)
                    );

$warranty_info =   array(
                        2 => ["2 years warranty", 0],
                        3 => ["3 years warranty", 168]
                    );

// var_dump($_POST);
if(isset($_POST['calculate'])){
    $upgrades = $_POST['selection'];
    $subtotal=1669;
    $total=0;
    $gst=0;
    $warranty = $_POST['warranty'];
    // var_dump($upgrades);
    if(in_array("op1", $upgrades) && in_array("op2", $upgrades)){
        echo "You can only select one upgrade option form 1-2";
    }
    else{
        $warranty_price =  $warranty_info[$upgrades];
        
        echo "<h1> Please confirm your selection </h1>";
        echo "
        <table border = '1'>
            <tr>
            <th>No.</th>
            <th>Description</th>
            <th>Price w/o GST</th>
            </tr>";
            echo "<tr>";
            echo "<td>1</td>";
            echo "<td>ThinkPad X1 Carbon Gen 8</td>";
            echo "<td>$1,669.00</td>";
            echo "</tr>";
            echo "<tr>";
            // if(in_array("2y",$warranty)){
            //     echo "<tr>";
            //     echo "<td>2</td>";
            //     echo "<td>2 years warranty</td>";
            //     echo "<td>$0.00</td>";
            //     echo "</tr>";
            // }

            echo "<td colspan='2'>Subtotal</td>";
            echo "<td>$$subtotal</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td colspan='2'>Subtotal</td>";
            echo "<td>$gst</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td colspan='2'>Total</td>";
            echo "<td>$total</td>";
            echo "</tr>";
        echo "</table>";

    
    }
}
?>