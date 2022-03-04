<?php
require_once "data/Person.php";


$person = new Person("Fedrian", "Balam");

$person->name = "Indra";
$person->sayHello("Fedrian");

$person->info();
