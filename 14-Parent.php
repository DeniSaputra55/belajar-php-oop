<?php 
require_once "data/6-Shape.php";

use Data\{Shape, Rectangle};

$shape = new shape();
echo $shape->getCorner() . PHP_EOL;

$rectangle = new Rectangle();
echo $rectangle->getCorner() . PHP_EOL;
echo $rectangle->getParentCorner() . PHP_EOL;
?>