<?php

include ('../Modele/functions.php');


session_start();

// Appel de la fonction qui va créer une liste de nom en tableau simple 
$tableauStagiaire = loadStudentsFromFile ("../ListeStagiaire.txt");

// Appel de la fonction qui va combiner le tableau des keys(place) et des valeurs(noms) en shuffle les valeurs 
$tableauAssociatifStagiaire = shufflePositions($tableauStagiaire);

// la variable $listPlaceStag prend la variable qui contient le tableau associatif
$listPlaceStag = $tableauAssociatifStagiaire;

// le tableau associatif va etre enregistré au format JSON
saveTableStudentToJSONFile ($listPlaceStag);




$_SESSION['listPlaceStag'] = $listPlaceStag;

var_dump($_SESSION);


header("Location: ../View/affichage.php");