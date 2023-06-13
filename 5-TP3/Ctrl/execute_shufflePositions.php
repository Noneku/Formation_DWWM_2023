<?php
// session_start();
// $studentList = loadStudentsFromFile($pathFile, 2);
// $studentList = shufflePositions($studentList);
// $_SESSION['$place'] = array_keys($studentList);
// $_SESSION['$studentList'] = $studentList;
// header("Location: ../View/affichage.php");

include_once __DIR__ . "/../Modele/functions.php";
session_start();
$studentList = array_values($_SESSION['$studentList']);
$studentList = shufflePositions($studentList);
arrayToJson($studentList);
$_SESSION['$studentList'] = $studentList;
header("Location: ../View/affichage.php");
