<?php
//enregistrer en fichier texte
include("Modele/functions.php");
$studentList = loadStudentsFromFile("ListeStagiaire.txt");/*Cette ligne de code appelle la fonction loadStudentsFromFile() 
en lui passant le nom du fichier "ListeStagiaire.txt". Cette fonction est probablement définie dans le fichier "functions.php"
 inclus précédemment. Elle est utilisée pour charger les étudiants à partir du fichier et renvoyer une liste contenant ces étudiants. 
 Le résultat est assigné à la variable $studentList.*/

$studentList = shufflePositions($studentList);/*Cette ligne de code appelle la fonction shufflePositions()
 en lui passant la liste $studentList. Comme mentionné précédemment, cette fonction est probablement définie 
 dans le fichier "functions.php". Son objectif est de mélanger les positions (ou l'ordre) des étudiants dans 
 la liste, et le résultat est assigné à nouveau à la variable $studentList.*/ 

studentsToFile($studentList); // executer une fonction  /* Cette ligne de code appelle la fonction studentsToFile() en lui passant 
/*la liste $studentList. Encore une fois, cette fonction est probablement définie dans le fichier "functions.php". Son rôle est d'écrire 
/*les étudiants de la liste dans un fichier. Le nom ou le chemin du fichier de destination n'est pas visible dans le code fourni, mais il
 est probablement défini dans la fonction studentsToFile().*/


?>