<?php
session_start();
include ("../Modele/functions.php");

$studentList = loadStudentsFromFile("../ListeStagiaire.txt");

$studentList = shufflePositions($studentList);// executer une fonction
saveToJsonFile($studentList);
print_r($studentList);

$_SESSION['$studentList'] = $studentList;

header("Location: ../View/affichage.php");