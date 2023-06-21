<?php
include "functions.php";


$studentList = loadStudentsFromFile("ListeStagiaire.txt");
var_dump($studentList);

studentsToFile($studentList);
saveStudentsToCSVFile($studentList);
?>