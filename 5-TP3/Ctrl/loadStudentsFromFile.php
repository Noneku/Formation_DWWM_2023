<?php

include ('../Modele/functions.php');

session_start();

$studentsList = loadStudentsFromFile('../ListeStagiaire.txt');

$_SESSION['$assoStudents'] = $assoStudents;

header("Location: ../views/affichage.php");





?>