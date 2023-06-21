<?php

include("../Ctrl/loadStudentsFromFile.php");
include_once("../Modele/functions.php");

// Créer tableau simple du style associatif pour le sauvegarder en CSV ___________________________________________________________________________________________
$listeStagiaireAssociatif = createTableStudentsToCSVFile($tableauStagiaire);

// Creation et affichage de la variable $listeStagiaireAssociatif_______________________________________________________________________
print_r($listeStagiaireAssociatif);


?>