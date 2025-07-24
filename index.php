<?php

use Agraviador\Gs\Models\StudentModel;
use Agraviador\Gs\Models\Crud;

require 'vendor/autoload.php';

$student = new StudentModel;

//$listofstudents = $student->read();


// $student->name ="haslo dirk";
//  $student->course = "dadadad ";
//  $student->year_level = 44654;
// $student->section = "D";


$listofstudents = $student->read();
print_r($listofstudents);
// print_r($student);



