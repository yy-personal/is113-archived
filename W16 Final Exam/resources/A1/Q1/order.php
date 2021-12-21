<?php

require_once 'common.php';

/* 
 * grabs the value send over by the dropdown list
 * the format will be <product's id>-<size> 
 * e.g. '1-M'
 */

$items = $_POST['item'];

$dao = new ProductDAO();
var_dump($items);

// YOUR CODE GOES HERE
foreach($items as $item){
    if($item!=''){
        $pieces = explode('-',$item);
        $dao->reduceInventory($pieces[0],$pieces[1]);
    }
    
}

header('Location: display.php');
return;

?>
