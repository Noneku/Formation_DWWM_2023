<?php
include "functions.php";
$pathFile = "ListeStagiaire.txt";
$date = date('dmY-his');



loadStudentsFromFile($pathFile);
studentsToFile($studentList);
saveStudentsToCSVFile($studentList);
