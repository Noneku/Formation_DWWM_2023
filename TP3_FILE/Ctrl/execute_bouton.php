<? include
include ("Modele/functions.php");

$studentList = loadStudentsFromFile("ListeStagiaire.txt");

$studentList = shufflePositions($studentList);// executer une fonction


?>