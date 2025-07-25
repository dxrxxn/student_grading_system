<?php

use Agraviador\Gs\Models\StudentModel;
use Agraviador\Gs\Models\Crud;

require 'vendor/autoload.php';

$student = new StudentModel;
 $student->id = 5678910;
 $student->name ="GHEAN DELA CRUZ";
 $student->course = "BSIT ";
  $student->year_level = 1;
 $student->section = "D";

//  $student->update(5678910);
// $student->create();
  $student->delete(23456789);
//  $listofstudents = $student->read();
//  print_r($listofstudents);




