<?php 
require_once "data/1-Person.php";

$eko = new Person("eko", "subang");
$eko->name = "eko";
$eko->sayHello("budi");

$joko = new Person("joko", "cirebon");
$joko->name = "joko";
$joko->sayHello(null);

$eko->info();
$joko->info();

?>