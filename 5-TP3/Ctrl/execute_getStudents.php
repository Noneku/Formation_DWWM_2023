<?php
include "../Modele/functions.php";

session_start();

//Sort Array
$arrayStagiaireSort = shufflePositions($_SESSION["basicFileListStagiaire"]);
$_SESSION['stagiaireSort'] = $arrayStagiaireSort;

//Redirection
header("Location: ../View/ClasseDWWM.php");
?>