<?php 
require_once "data/10-Food.php";
require_once "data/9-Animal.php";
require_once "data/17-AnimalShelter.php";

$catShelter = new \Data\CatShelter();
$cat = $catShelter->adopt("Luna");
$cat->eat(new \Data\AnimalFood());

$dogShelter = new \Data\DogShelter();
$dog = $dogShelter->adopt("Doggy");
$dog->eat(new \Data\Food());
?>