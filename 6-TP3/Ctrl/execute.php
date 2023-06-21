<?php
include "../Modele/functions.php";


$studentList = loadStudentsFromFile("../ListeStagiaire.txt");
var_dump($studentList);
$student_print = shufflePositions($studentList);
print_r($student_print);

?>