<?php 

include ('../Modele/functions.php');

session_start();

$assoStudents = loadStudentsFromFile('../ListeStagiaire.txt');

$assoStudents = shufflePositions($assoStudents);

saveStudentsToJSONFile($assoStudents);

$_SESSION['$assoStudents'] = $assoStudents;

header("Location: ../views/affichage.php");

?>