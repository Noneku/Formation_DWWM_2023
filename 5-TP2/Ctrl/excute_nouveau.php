<?php

include "../Modele/functions.php";

$studentList = loadStudentsFromFile("../ListeStagiaire.txt");
var_dump($studentList);


$student_print = shufflePositions($studentList);
print_r($student_print);



saveStudentsToCSV_File($student_print);




/*$d = new DateTime();

// Output the date with microseconds.
$var = $d->format('Y-m-d\TH-i-s');
// le nom du nouveau fichier
$fichier = $var.'appel-fonction1.txt';
// le texte qui sera écrit dans le fichier
$texte = "hello world!\n";

// écriture dans le fichier
file_put_contents($fichier, $texte);
*/




?>


