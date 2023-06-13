<?php
include '..\Modele\functions.php';

$pathFile = "..\ListeStagiaire.txt";

$studentsList = loadStudentsFromFile($pathFile);

saveStudentsToCSVFile($studentsList);

?>