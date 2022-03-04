<?php

require_once("data/Person.php");

define("APPLICATION", "Belajar PHP OOP"); //PHP versi lama
const APP_VERSION = "1.0.0"; //sejak php 7.4


echo APPLICATION . PHP_EOL;
echo APP_VERSION . PHP_EOL;


echo Person::AUTHOR . PHP_EOL;
