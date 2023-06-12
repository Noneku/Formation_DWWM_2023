<?php
include "functions.php";

// $studentsList =loadStudentsFromFile('ListeStagiaire.txt');
// studentsToFile($studentsList);
$studentsList=loadStudentsFromFile('ListeStagiaire.txt');
studentsToFile($studentsList);
saveStudentsToCSVFile($studentsList);
?>