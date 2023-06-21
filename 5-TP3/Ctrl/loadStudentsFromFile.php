<?php

include '..\Modele\functions.php';

$student = loadStudentsFromFile('..\ListeStagiaire.txt');
saveStudentsToCSVFile($student);
print_r($student);