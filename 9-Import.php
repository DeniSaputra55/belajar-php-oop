<?php 
require_once "data/3-Conflict.php";
require_once "data/4-Helper.php";

use Data\One\Conflict;
use function Helper\helpMe;
use const Helper\APPLICATION;

$conflict1 = new Conflict();
$conflict2 = new Data\Two\Conflict;

helpMe();
echo APPLICATION . PHP_EOL;
?>