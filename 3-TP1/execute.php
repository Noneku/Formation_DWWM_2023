<?php

include "function.php";
$studentList = loadStudentsFromFile("ListeStagiaire.txt");
studentsToFile($studentList);
saveStudentsToCSVFile($studentList);
?>