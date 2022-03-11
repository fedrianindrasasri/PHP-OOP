<?php

$date = new DateTime();

$date->setDate(2020, 12, 20);
$date->setTime(11, 11, 11);

// var_dump($date);

$date->add(new DateInterval("P1Y"));

$dateInterval = new DateInterval("P1M");
$dateInterval->invert = 1;

var_dump($date);


$now = new DateTime();
$now->add($dateInterval);
$now->setTimezone(new DateTimeZone("UTC"));
var_dump($now);


$string = $now->format("Y-m-d H:i:s") . PHP_EOL;
echo "Waktu saat ini : $string" . PHP_EOL;


$date = DateTime::createFromFormat("Y-m-d H:i:s", "2020-10-10 10:10:10", new DateTimeZone("Asia/Jakarta"));
var_dump($date);
