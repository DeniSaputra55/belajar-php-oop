<?php 
//global namespace
namespace{
    require_once "data/3-Conflict.php";
    require_once "data/4-Helper.php";
    //membuat object dari Namespace
    $conflict1 = new Data\One\Conflict;
    $conflict2 = new Data\Two\Conflict;

    echo Helper\APPLICATION . PHP_EOL;

    Helper\helpMe();
}
?>