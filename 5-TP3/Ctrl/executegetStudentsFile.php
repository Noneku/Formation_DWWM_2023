<?php
include '..\Modele\functions.php';

$student = loadStudentsFromFile('..\ListeStagiaire.txt');
studentsToFile($student);


