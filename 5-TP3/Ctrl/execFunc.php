<?php
require_once '../Modele/functions.php';


session_start();



$arraysKey = array('Place_1' ,'Place_2','Place_3','Place_4','Place_5','Place_6','Place_7','Place_8','Place_9','Place_10','Place_11','Place_12','Place_13','Place_14','Place_15','Place_16');
;




//$listPlaceStag = randomizePlacesStag($listPlaceStag);



$studentsList = loadStudentsFromFile("..\ListeStagiaire.txt");

$studentsList = saveStudentsToCSVFile($studentsList);

$_SESSION['studentsList'] = $studentsList;


header("Location: ../View/affichage.php");

