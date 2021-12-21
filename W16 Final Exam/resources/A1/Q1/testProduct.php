<?php

require_once 'common.php';

// TEST DATA
$p1 = new Product ( 1, 'SIS T-shirt', 15, ['S'=>1, 'M'=>2, 'L'=>3] );
$p2 = new Product ( 2, 'SMU T-shirt', 17, ['S'=>1, 'L'=>3] );
$p3 = new Product ( 3, 'LKCSB Polo Shirt', 22, [] );

//====================== Testing hasStock() method ======================
// this will return true this shirt has stock available
if( $p1->hasStock() ) {
   echo "{$p1->getName()} is Available";
}
else {
   echo "{$p1->getName()} is NOT available";
}
echo "<br/>";

// this will return false since this shirt has no stock (none of the sizes are available)
if( $p3->hasStock() ) {
   echo "{$p3->getName()} is Available";
}
else {
   echo "{$p3->getName()} is NOT available";
}

echo '<hr>';

//=============== Testing hasStockBySize($pSize) method ===============
$pSize = 'S';
// this will return true since this shirt has size 'S' stock available
if( $p1->hasStockBySize($pSize) ) {
   echo "Size $pSize of {$p1->getName()} is Available";
}
else {
   echo "Size $pSize of {$p1->getName()} is NOT Available";
}
echo "<br/>";

// this will return false since this shirt does NOT have size 'M' stock available
$pSize = 'M';
if( $p2->hasStockBySize($pSize) ) {
   echo "Size $pSize of {$p2->getName()} is Available";
}
else {
   echo "Size $pSize of {$p2->getName()} is NOT Available";
}

echo '<hr>';

?>
