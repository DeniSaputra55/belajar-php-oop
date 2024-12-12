<?php 
//Manipulasi Properties
require_once "data/1-Person.php";
//menggunakan constructor
$person = new Person("eko", "subang");
$person->name = "eko";
$person->address = "subang";

var_dump($person);

echo "Name : $person->name" . PHP_EOL;
echo "Address : $person->address" . PHP_EOL;
echo "Country : $person->country" . PHP_EOL;
$person2 = new Person("Budi", null);
$person2->name = "Budi";
$person2->address = null;

var_dump($person2);
//error
//$person2->name = []
?>