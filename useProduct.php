<?php

include_once 'product.php';
use productSpace as s;

use productSpace\stock as pS; // cách 2

$p1 = new s\product("123","iphone",333);
echo $p1->total();

$p2 = new pS(); // cách 2
$p2->pName = 'SS note 21';//use setter
$p2->pQuantity = 2;//use setter
echo "<br>";
echo $p2->printName();
echo "<br>";
echo $p2->pQuantity; //use getter

?>