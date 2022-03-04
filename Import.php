<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\One\Conflict as Conflict1;
use Data\Two\Conflict as Conflict2;
use function Helper\helpMe;
use const Helper\APPLICATION;

$conflict1 = new Conflict1();
$conflict2 = new Conflict2();


// cara memanggil helper
echo APPLICATION . PHP_EOL;
helpMe();
