<?php

include ("functions.php");


// affichage de la liste des students en texte et conversion en tableau 
// stockage de la fonction dans une variable $tableau 
$tableauStagiaire = loadStudentsFromFile ("ListeStagiaire.txt") ;

// // // // affichage de la variable qui contient elle meme une fonction 
print_r($tableauStagiaire);

// Sauvegarde du tableau dans un fichier .TXT____________________________________________________________________________________________________________________________

studentsToFile($tableauStagiaire);


// Sauvegarde du tableau dans un fichier .CSV____________________________________________________________________________________________________________________________________________


saveStudentsToCSVFile($tableauStagiaire);


?>