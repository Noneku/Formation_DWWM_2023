<?php


include_once '../Modele/functions.php';

$studentList = loadStudentsFromFile("../ListeStagiaire.txt");

shufflePositions($studentList);



?>