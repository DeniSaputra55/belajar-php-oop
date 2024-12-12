<?php 
require_once "data/2-Manager.php";

$manager = new Manager();
$manager->name = "Budi";
$manager->sayHello("joko");

$vp = new VicePresident();
$vp->name = "eko";
$vp->sayHello("joko");
?>