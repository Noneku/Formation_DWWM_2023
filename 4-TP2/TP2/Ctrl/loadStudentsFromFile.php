<?php

include '../Modele/functions.php';

$tabAsso = loadStudentsFromFile('../ListeStagiaire.txt');
$tabAsso = shufflePositions($tabAsso);
print_r($tabAsso);
?>