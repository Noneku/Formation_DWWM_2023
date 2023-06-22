<?php


include '..\Modele\functions.php';
session_start();
$listPlaceStag = loadStudentsFromFile('..\ListeStagiaire.txt');
$listPlaceStag = shufflePositions($listPlaceStag);
saveStudentsToJSONFile($listPlaceStag);
$_SESSION['$listPlaceStag']=$listPlaceStag;
header("Location: ../View/affichage.php");




