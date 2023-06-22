<?php

session_start();


include '..\Modele\functions.php';


$student = loadStudentsFromFile('..\ListeStagiaire.txt');
$student = shufflePositions($student);
saveStudentsToCSVFile($student);


$_SESSION['$student'] = $student;

header("Location: ../Views/affichage.php");


?>