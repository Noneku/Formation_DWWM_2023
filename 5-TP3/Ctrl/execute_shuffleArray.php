<?php
include "../Modele/functions.php";

//Load basic File
$basicStudentsFileList = loadStudentsFromFile("../ListeStagiaire.txt");

session_start();

//Sort the Array
$_SESSION['studentsListSort'] = shufflePositions($basicStudentsFileList);

 header("Location: ../View/Affichage.php");
?>