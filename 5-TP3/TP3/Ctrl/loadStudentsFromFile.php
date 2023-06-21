<?php

include("../Modele/functions.php");

// affichage de la liste des students en texte et conversion en tableau 
$tableauStagiaire = loadStudentsFromFile ("../ListeStagiaire.txt");

// // affichage de la variable(soit du tableau) qui contient elle meme une fonction 
print_r($tableauStagiaire);


?>