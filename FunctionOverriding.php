<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Fedrian";
$manager->sayHello("Indra");

$vp = new VicePresident();
$vp->name = "Fedrian";
$vp->sayHello("Indra");
