<?php

include '..\Modele\functions.php';
$studentList = loadStudentsFromFile('..\ListeStagiaire.txt');
$studentList = shufflePositions($studentList);
print_r($studentList);

