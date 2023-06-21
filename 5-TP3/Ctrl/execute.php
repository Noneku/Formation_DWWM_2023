<?php
// appel mon fichier fonction
include '..\Modele\functions.php';

// demarre la session
session_start();

// appel de fonction qui creer mon tableau (source)
$student = loadStudentsFromFile('..\ListeStagiaire.txt');

// melange de tableau
$student = shufflePositions($student);

// mettre les donnees du tableau dans la session pour etre exploitable par l html
$_SESSION['$student'] = $student;

// lien vers la page d'affichage
header("Location: ../View/affichage.php");
?>