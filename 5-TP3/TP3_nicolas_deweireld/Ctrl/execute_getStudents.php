<?php

include '../Modele/functions.php';
session_start();
//fonction de création du tableau initial
$listPlaceStag=loadStudentsFromFile('../ListeStagiaire.txt');

//fonction de melange du tableau
$listPlaceStag=shufflePositions($listPlaceStag);

//fonction de sauvegarde en Json
saveStudentsToJsonFile($listPlaceStag);

//lien avec le fichier HTML
$_SESSION['$listPlaceStag'] = $listPlaceStag;
header("Location: ../View/affichage.php");


// for ($i=0; $i <= count($studentlist) ; $i++) { 
//     $str = "PLACE_".$i." => ".$studentlist[$i];
//     echo $str; 
// }
