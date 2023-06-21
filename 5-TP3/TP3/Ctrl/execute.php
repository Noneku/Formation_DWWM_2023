<?php
include '..\Modele\functions.php';
session_start();
$student = loadStudentsFromFile('..\ListeStagiaire.txt');
$student = shufflePositions($student);
print_r($student);
$_SESSION['$student'] = $student;
header("Location: ../View/affichage.php");
?>