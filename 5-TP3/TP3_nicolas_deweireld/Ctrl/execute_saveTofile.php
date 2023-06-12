<?php
include '..\Modele\functions.php';
session_start();
//fonction de création du tableau initial
$listPlaceStag=loadStudentsFromFile('..\ListeStagiaire.txt');

//fonction de melange du tableau
$listPlaceStag=shufflePositions($listPlaceStag);

//fonction de sauvegarde en Json
saveStudentsToJsonFile($listPlaceStag);

$_SESSION['$listPlaceStag'] = $listPlaceStag;

header("Location: ../View/affichage.php");

