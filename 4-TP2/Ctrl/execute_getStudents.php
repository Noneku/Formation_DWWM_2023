<?php
include '..\Modele\functions.php';

$studentlist=loadStudentsFromFile('..\ListeStagiaire.txt');
// print_r($studentlist);

$studentlist=shufflePositions($studentlist);
print_r($studentlist);



// for ($i=0; $i <= count($studentlist) ; $i++) { 
//     $str = "PLACE_".$i." => ".$studentlist[$i];
//     echo $str; 
// }
