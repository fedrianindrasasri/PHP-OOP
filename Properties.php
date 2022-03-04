<?php


require_once "data/Person.php";

$person = new Person("Indra", "Bengkalis");
$person->name = "Fedrian";
$person->address = "Balam";

var_dump($person);
