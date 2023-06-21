<?php

include '..\Modele\functions.php';


$studentList = loadStudentsFromFile('../ListeStagiaire.txt');

// $studentListShuffle = shufflePositions($studentList);
$studentList = shufflePositions($studentList);

saveStudentsToCSVFile($studentList);

?>