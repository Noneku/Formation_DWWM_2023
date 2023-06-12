<?php
include '../Modele/functions.php';
session_start();
//fonction de création du tableau initial
$listPlaceStag=loadStudentsFromFile('../ListeStagiaire.txt');

$_SESSION['$listPlaceStag'] = $listPlaceStag;

header("Location: ../View/affichage.php");