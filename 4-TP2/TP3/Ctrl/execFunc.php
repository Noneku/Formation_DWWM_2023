<?php
require_once '../Modele/function.php';
session_start();

$stag = readFileToArray('listStag.txt');

$place = readFileToArray('listPlace.txt');

$listPlaceStag = generateStagPlaces($place, $stag);


//$listPlaceStag = randomizePlacesStag($listPlaceStag);


$listPlaceStag = saveListStagToFile($listPlaceStag);

$listPlaceStag = jsonToArray($listPlaceStag);

$listPlaceStag = randomizePlacesStag2($listPlaceStag);

$_SESSION['$listPlaceStag'] = $listPlaceStag;

header("Location: ../views/affichage.php");

