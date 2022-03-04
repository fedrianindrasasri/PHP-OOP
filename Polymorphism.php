<?php
require_once "data/Programmer.php";

$company = new Company();

$company->programmer = new Programmer("Fedrian");
var_dump($company);

$company->programmer = new BackendProgrammer("Indra");
var_dump($company);

$company->programmer = new FrontendProgrammer("Sasri");
var_dump($company);


sayHelloProgrammer(new Programmer("Fedrian"));
sayHelloProgrammer(new BackendProgrammer("Indra"));
sayHelloProgrammer(new FrontendProgrammer("Sasri"));
