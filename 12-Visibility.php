<?php 
//visibility
require_once "data/5-Product.php";

$product = new Product("Apple" , 20000);

echo $product->getName() . PHP_EOL;
echo $product->getPrice() . PHP_EOL;

$dummy = new ProductDummy("Dummy", 1000);
$dummy->info();
?>