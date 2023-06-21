<?php

include '..\Modele\functions.php';


$studentList = loadStudentsFromFile('../ListeStagiaire.txt');
studentsToFile($studentList);

?>