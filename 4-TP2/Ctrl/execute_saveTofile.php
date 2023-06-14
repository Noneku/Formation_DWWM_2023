<?php 

include ('../Modele/functions.php');


$assoStudents = loadStudentsFromFile('../ListeStagiaire.txt');

$assoStudents = shufflePositions($assoStudents);

saveStudentsToCSVFile($assoStudents);

?>