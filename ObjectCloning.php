<?php

require_once "data/Student.php";

$student = new Student();

$student->id = "1";
$student->name = "Fedrian";
$student->value = 100;
$student->setSample("FFF");


var_dump($student);


// cara clone nya 
$student2 = clone $student;
var_dump($student2);
