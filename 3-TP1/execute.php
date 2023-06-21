<?php
include "functions.php";

// studentsToFile($studentsList);
$student = loadStudentsFromFile('ListeStagiaire.txt');
print_r($student);
studentsToFile($student);
saveStudentsToCSVFile($student);
?>