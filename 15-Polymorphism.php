<?php 
require_once "data/7-Programmer.php";

$company = new Company();
$company->programmer = new Programmer("eko");
var_dump($company);

$company->programmer = new BackendProgrammer("eko");
var_dump($company);

$company->programmer = new FrontendProgrammer("eko");
var_dump($company);

sayHelloProgrammer(new Programmer("eko"));
sayHelloProgrammer(new BackendProgrammer("eko"));
sayHelloProgrammer(new FrontendProgrammer("eko"));
?>