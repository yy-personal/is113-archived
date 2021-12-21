<?php

// I don't have any data here!
// I only display data
require_once 'data.php';

?>
<!DOCTYPE html>
<html>
<head>
    <title>Mama Shop</title>
</head>

<body>

<h1>Pyongyang's Best Mama Shop</h1>

<form action='process.php' method='POST'>

    <font size='5'><b>Items Available</b></font>

    <table border='1'>

            <tr>
                <th>Store</th>
                <th>Item ID</th>
                <th>Item Description</th>
            </tr>

        <?php
            // YOUR CODE GOES HERE
            // Each row -> an item
            foreach($inventory_array as $store=>$store_info){
                // var_dump($store);
                // var_dump($store_info);
                // var_dump($store_info['items']);
                // var_dump(count($store_info['items']));
                $rowspan = count($store_info['items']);
                $is_first_item = True;
                foreach($store_info['items'] as $items=>$info){
                    // var_dump($items);
                    $description = $info['description'];
                    // var_dump($item_info);
                    // var_dump($description);
                    echo "
                    <tr>";
                        if($is_first_item){
                            echo "<td rowspan = '$rowspan'>$store</td>";
                            $is_first_item = False;
                        }

                        echo "
                        
                        <td>$items</td>
                        <td>$description</td>
                    </tr>
                    ";
                }
                

                
                
            }

        ?>
        
    </table>

    <br>

    
    <font size='5'><b>Your Particulars</b></font>
    <br>

        <input type="radio" name="gender" value="female"> Female    
        <input type="radio" name="gender" value="male"> Male
    
    <br>
    Your Name:
        <input type='text' name='your_name' value=''>

    <br>
    <br>

    <input type='submit' value='Show Inventory'>

</form>

<hr>
Click <a href="display.php">here</a> to Reset

</body>

</html>


<!-- <?php
            // YOUR CODE GOES HERE
            // Each row -> an item
            foreach($inventory_array as $store_name => $store_details){
                // var_dump($store_name);
                // var_dump($store_details);

                $items = $store_details['items'];
                // var_dump($items);

                $rowspan = count($items);
                $is_first_item = True;
                
                foreach($items as $item_id => $item_details){
                    // var_dump($item_id);
                    // var_dump($item_details);
                    $description = $item_details['description'];
                    // var_dump($description);
                    echo "
                    <tr>";
                    if($is_first_item == True){
                        echo "
                        <td rowspan='$rowspan'>$store_name</td>";
                    //Only first row os $store_name have this, subsequent row no more.
                        $is_first_item = False;
                    }
                    
                    echo "
                        <td>$item_id</td>
                        <td>$description</td>
                    </tr>
                    ";
                }
            }

        ?> -->