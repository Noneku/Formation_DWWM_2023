<?php
require_once "../Modele/functions.php";
session_start();


$studentList = loadStudentsFromFile("../ListeStagiaire.txt");

$student_print = shufflePositions($studentList);


$_SESSION['$studentList'] = $student_print;

//shuffle($_SESSION['studentList']);


print_r($_SESSION['$studentList']) ;
header("Location: ../view/affichage.php");










/*$stag = readFileToArray('listStag.txt');

$place = readFileToArray('listPlace.txt');

$listPlaceStag = generateStagPlaces($place, $stag);


//$listPlaceStag = randomizePlacesStag($listPlaceStag);


$listPlaceStag = saveListStagToFile($listPlaceStag);

$listPlaceStag = jsonToArray($listPlaceStag);

$listPlaceStag = randomizePlacesStag2($listPlaceStag);

$_SESSION['$listPlaceStag'] = $listPlaceStag;

header("Location: ../views/affichage.php");*/






        