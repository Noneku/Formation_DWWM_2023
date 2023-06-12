<?php
include '..\Modele\functions.php';

$studentlist=loadStudentsFromFile('..\ListeStagiaire.txt');

$studentlist=shufflePositions($studentlist);

saveStudentsToCSVFile($studentlist);

