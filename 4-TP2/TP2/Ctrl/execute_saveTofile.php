<?php
include "../Modele/functions.php";
$studentsList = loadStudentsFromFile("../ListeStagiaire.txt");
studentsToFile($studentsList);
$studentsList = shufflePositions($studentsList);
saveStudentsToCSVFile($studentsList);
?>