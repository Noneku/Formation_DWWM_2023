<?php
include 'Modele/functions.php';
session_start();

$studentList = loadStudentsFromFile("ListeStagiaire.txt");

$studentList = shufflePositions($studentList);// executer une fonction

saveToJsonFile($studentList);

$_SESSION['$studentList'] = $studentList;

header("Location: View/affichage.php");


//loadStudentsFromFile('../ListeStagiaire.txt');

