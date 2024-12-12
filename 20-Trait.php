<?php 
require_once "data/13-SayGoodBye.php";

use Data\Traits\{Person, SayHello, SayGoodBye};

$person = new Person();
$person->goodBye("Joko");
$person->hello("budi");

$person->name = "eko";
var_dump($person);

$person->run();
?>