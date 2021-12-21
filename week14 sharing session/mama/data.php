<?php

require_once 'include/Store.php';
require_once 'include/Item.php';

$store1 = new Store('East', 'Kim Jong Un');
$store1->addItem(new Item('A123', "Supreme Shampoo", 5.75, 12));
$store1->addItem(new Item('B456', "Supreme Toothbrush", 3.50, 5));

$store2 = new Store('West', 'Kim Yo Jong');
$store2->addItem(new Item('C789', "Supreme Pencil", 1.25, 7));
$store2->addItem(new Item('D987', "Supreme Coffee", 4.75, 30));
$store2->addItem(new Item('E654', "Supreme Beer", 3.75, 100));

// This is an Indexed Array of Store objects
$inventory_array = [
    $store1,
    $store2
];


// Give me all stores owned by a certain person named 'XYZ'?
// Data.php is not ideal to answer these questions, to do it in DAO.


// Give me all stores whose total stock quantity > 200

?>








<!-- <?php

$inventory_array = [
    "East" => [
        "owner" => "Kim Jong Un",
        "items" => [
            'A123' => [
                'description' => "Supreme Shampoo",
                'price' => 5.75,
                'quantity' => 12
            ],
            'B456' => [
                'description' => "Supreme Toothbrush",
                'price' => 3.50,
                'quantity' => 5
            ]
        ]
    ],
    "West" => [
        "owner" => "Kim Yo Jong",
        "items" =>[
            'C789' => [
                'description' => "Supreme Pencil",
                'price' => 1.25,
                'quantity' => 7
            ],
            'D987' => [
                'description' => "Supreme Coffee",
                'price' => 4.75,
                'quantity' => 30
            ],
            'E654' => [
                'description' => "Supreme Beer",
                'price' => 3.75,
                'quantity' => 100
            ]
        ]
    ]
];

?> -->

