<?php
include "functions.php";


// studentsToFile($studentsList);

$studentList = loadStudentsFromFile('ListeStagiaire.txt');
studentsToFile($studentList);
saveStudentsToCSVFile($studentList);


?>