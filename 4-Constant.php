<?php 
require_once "data/1-Person.php";
//constant
define("APPLICATION", "Belajar PHP OOP");
const APP_VERSION = "1.0.0";

echo APPLICATION . PHP_EOL;
echo APP_VERSION . PHP_EOL;
//mengakses constant di class
echo Person::AUTHOR . PHP_EOL;
?>