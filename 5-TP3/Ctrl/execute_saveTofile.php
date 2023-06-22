<?php

include '..\Modele\functions.php';
$shuffledList = loadStudentsFromFile('..\ListeStagiaire.txt');
$shuffledList = shufflePositions($shuffledList);

saveStudentsToCSVFile($shuffledList);
print_r($shuffledList);

saveStudentsToJSONFile($shuffledList);


