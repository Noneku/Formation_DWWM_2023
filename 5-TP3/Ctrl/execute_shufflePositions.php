<?php
include ("../Modele/functions.php");

$studentList = loadStudentsFromFile("../ListeStagiaire.txt");

shufflePositions($studentList); // executer une fonction
?>