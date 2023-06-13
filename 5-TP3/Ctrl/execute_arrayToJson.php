<?php
include_once __DIR__ . "/../Modele/functions.php";
$pathFile = __DIR__ . "/../ListeStagiaire.txt";
$studentList = loadStudentsFromFile($pathFile, 2);
arrayToJson($studentList);
