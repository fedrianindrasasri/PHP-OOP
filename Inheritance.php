<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Indra";
$manager->sayHello("Fedrian");

$vp = new VicePresident();
$vp->name = "AAAAAA";
$vp->sayHello("BBBBB");
