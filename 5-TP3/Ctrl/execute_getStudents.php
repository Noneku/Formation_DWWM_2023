<?php

include '..\Modele\functions.php';
session_start();

$pathFile = "..\ListeStagiaire.txt";

$studentsList = loadStudentsFromFile($pathFile);
studentsToFile($studentsList);
?>