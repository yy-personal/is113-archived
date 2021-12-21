<?php
require_once 'data.php';
// How do we import from another PHP file?
var_dump($_POST);
$errors = []; // Will contain error msgs (if any)
// You need to do a series of form validation checks
// 1) User must select at least 1 item (checkbox)
// Error msg: 'You need to select at least 1 item'
if( !isset($_POST['items']) ) {
    $msg = 'You need to select at least 1 item';
    //echo "$msg <br>";
    $errors[] = $msg;
}
else {
    $items = $_POST['items']; // user selected item(s)
}
// 2) User MUST indicate residency status (radio button)
// Error msg: 'You need to indicate residency status'
if( !isset($_POST['residency']) ) {
    $msg = 'You need to indicate residency status';
    // echo "$msg <br>";
    $errors[] = $msg;
}
else {
    $residency = $_POST['residency'];
}
// 3) User MUST provide name (text box)
// Error msg: 'You need to input your name'
if( !isset($_POST['your_name']) ) {
    $msg = 'You need to input your name';
    // echo "$msg <br>";
    $errors[] = $msg;
}
else {
    // 4) If user provided name, it cannot be empty.
    // Error msg: 'Your name cannot be empty'
    if( trim($_POST['your_name']) == '' ) {
        $msg = 'Your name cannot be empty';
        //echo "$msg <br>";
        $errors[] = $msg;
    }
    else {
        $your_name = $_POST['your_name'];
    }
}
// var_dump($errors);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Process</title>
</head>
<body>
<?php
    if( count($errors) > 0 ) {
        // Oh no! Form is incomplete - got errors!
        
        // Your Code Goes Here
        // Display error messages as an ordered list
        echo "
        <ol>";
        
        foreach($errors as $one_error) {
            echo "
            <li>$one_error</li>
            ";
        }
        echo "
        </ol>";
    }
    else {
        // Form IS complete yay!
        // Your Code Goes Here
        // Retrieve form input values into variables
        
        echo "
        <h1>Hello $your_name</h1>";
        echo "
        <h3>Current Inventory for the selected items are:</h3>";
        echo "
        <table border='1'>
            <tr>
                <th>Item ID</th>
                <th>Item Description</th>
                <th>Price (USD)</th>
                <th>Current Inventory</th>
            </tr>
        ";
        // Your Code Goes Here
        // Read from $itemsArr
        // Loop through each item
        //    IF the item is something that the user selected in display.php
        //    THEN display the item's details
        //       Item ID
        //       Item Description
        //       Price
        //       Current Inventory
        // $items contains item IDs
        foreach($items as $itemId) {
            $item_details_assoc = $itemsArr[$itemId];
            $desc = $item_details_assoc['description'];
            $price = $item_details_assoc['price'];
            $inventory = $item_details_assoc['inventory'];
            echo "
            <tr>
                <td>$itemId</td>
                <td>$desc</td>
                <td>$price</td>
                <td>$inventory</td>
            </tr>
            ";
        }
        echo "
        </table>";
        // Your Code Goes Here
        // Determine the user's Tax Rate
        $tax = "5%"; // Local
        if( $residency == 'foreigner' ) {
            $tax = "30%";
        }
        echo "
        <h3>Your tax rate is $tax</h3>
        ";
    }
?>
<hr>
Click <a href="display.php">here</a> to Home
</body>
</html>