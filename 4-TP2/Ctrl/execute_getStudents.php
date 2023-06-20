<?php
include "../Modele/functions.php";
$studentsList = loadStudentsFromFile("../ListeStagiaire.txt");
shufflePositions($studentsList);
?>