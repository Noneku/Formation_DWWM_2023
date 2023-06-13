<?php
include '..\Modele\functions.php';
session_start();


$pathFile = "..\ListeStagiaire.txt";

$studentsList = loadStudentsFromFile($pathFile);

$studentsList = saveStudentsToCSVFile($studentsList);

$_SESSION['studentsList'] = $studentsList;


header("Location: ../View/affichage.php");

?>