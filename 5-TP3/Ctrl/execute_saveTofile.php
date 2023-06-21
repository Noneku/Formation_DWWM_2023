<?php
include '..\Modele\functions.php';

session_start();

$student = loadStudentsFromFile('..\ListeStagiaire.txt');

studentsToFile($student);

saveStudentsToJSONFile($student);

$_SESSION['$student'] = $student;

header("Location: ../View/affichage.php");




?>