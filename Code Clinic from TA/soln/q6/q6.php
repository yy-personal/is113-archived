<?php

$shoe_prices = [
    "birkenstock" => 23.50,
    "converse" => 48.90,
    "crocs" => 8.20,
    "nike" => 32.55
];

if (isset($_GET['shoes'])) {
    echo "<h2>You have the following shoes in your cart:</h2>";
    $shoes = $_GET['shoes'];
    $total_cost = 0;
    echo "<ol>";
    foreach ($shoes as $shoe) {
        echo "<li>$shoe</li>";
        $total_cost += $shoe_prices[$shoe];
    }
    echo "
    </ol>";
    echo "
    <h1>The total cost of all the shoes in your cart is $$total_cost</h1>";

}
else {
    echo "<h1>You have checked out nothing!</h1>";   
}

?>