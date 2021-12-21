<?PHP
require_once "data.php";
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
                <th>Item ID</th>
                <th>Item Description</th>
            </tr>

        <?php
        // Your Code Goes Here
        // Read from $itemsArr
        // Loop through and display each item's details (Item ID & Item Description)
        
            foreach($itemsArr as $item_id=>$value)
            {
                echo "
                <tr>
                    <td>$item_id</td>
                    
                    <td>
                    <label><input type='checkbox' name='items[]' value = {$item_id}>{$value['description']}
                    </label>
                    </td>
                    
                    
                </tr>
                ";
                
            }
            
        ?>
        
    </table>

    <br>

    
    <font size='5'><b>Your Particulars</b></font>
    <br>

    <label>
        <input type="radio" name="residency" value="local"> Local
    </label>

    <label>
        <input type="radio" name="residency" value="foreigner"> Foreigner
    </label>
        


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