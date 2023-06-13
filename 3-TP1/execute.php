<?php
include "functions.php";

$pathFile = "ListeStagiaire.txt";


$studentList = loadStudentsFromFile($pathFile);

print_r($studentList);

studentsToFile($studentList);

saveStudentsToCSVFile($studentList);

// saveStudentsToCSVFile($studentList);

// studentsToFile($studentsList);
?>