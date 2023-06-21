<?php

session_start();

include '..\Modele\functions.php';


$studentList = loadStudentsFromFile('../ListeStagiaire.txt');

// $studentListShuffle = shufflePositions($studentList);
$studentList = shufflePositions($studentList);

saveStudentsToCSVFile($studentList);

saveStudentsToJSONFile($studentList);

$_SESSION['$studentList'] = $studentList;

header("Location: ../View/affichage.php");
?>