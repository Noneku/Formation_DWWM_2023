<?php
include '..\Modele\functions.php';


$student = loadStudentsFromFile('..\ListeStagiaire.txt');
$student = shufflePositions($student);
studentsToFile($student);
saveStudentsToCSVFile($student);
print_r($student);






?>