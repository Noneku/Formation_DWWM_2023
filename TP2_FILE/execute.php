<?php
//INCLUDE SERT A RELIER LE FICHIER FONCTION.
include "functions.php";

$studentList=loadStudentsFromFile("ListeStagiaire.txt");
studentsToFile( $studentList ) ;
saveStudentsToCSVFile ($studentList);
?>