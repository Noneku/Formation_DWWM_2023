<?php
include_once __DIR__ . "/../Modele/functions.php";
// session_start();
// $pathFile = __DIR__ . "/../ListeStagiaire.txt";
// $studentList = loadStudentsFromFile($pathFile, 2);
// $_SESSION['$place'] = array_keys($studentList);
// $_SESSION['$studentList'] = $studentList;
// arrayToJson($studentList);
// ($_SESSION['$studentList']['Place_12']);
// header("Location: ../View/affichage.php");
session_start();
$temp = $_FILES['fichier']['tmp_name'];



if (is_uploaded_file($temp)) {
    $studentListSimple = explode("\n", file_get_contents($temp));
    if ($temp = $_FILES['fichier']['tmp_name'] == false) {
        $studentListSimple = shufflePositions($studentListSimple);
    }
    if ($studentListSimple !== false) {
    } else {
        echo "erreur";
    }
} else {
    echo "erreur";
}

for ($i = 0; $i < 16; $i++) {
    $key[$i] = "Place_" . ($i + 1);
    $studentList[$key[$i]] = $studentListSimple[$i];
}
arrayToJson($studentList);
$_SESSION['$place'] = array_keys($studentList);
$_SESSION['$studentList'] = $studentList;
header("Location: ../View/affichage.php");
