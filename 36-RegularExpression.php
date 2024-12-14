<?php 
//regular expression match
$matches = [];
$result = preg_match_all("/eko|awan|edy/i", "Eko Kurniawan Khannedy", $matches);

var_dump($result);
var_dump($matches);
//regular expression replace
$result = preg_replace("/anjing|bangsat/i", "***", "dasar lu ANJING dan BANGSAT!");

var_dump($result);
//regular expression split
$result = preg_split("/[\s,-]/", "Eko Kurniawan Khannedy,Programmer,Zaman-Now");

var_dump($result);
?>