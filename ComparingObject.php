<?php

require_once "data/Student.php";

$student = new Student();
$student->id = "1";
$student->name = "Fedrian";
$student->value = 100;

$student2 = new Student();
$student2->id = "1";
$student2->name = "Fedrian";
$student2->value = 100;

var_dump($student == $student2);
var_dump($student === $student2);
