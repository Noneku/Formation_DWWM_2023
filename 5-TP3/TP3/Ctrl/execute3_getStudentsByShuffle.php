<?php

include("../Ctrl/loadStudentsFromFile.php");
include_once("../Modele/functions.php");

// Créer un tableau Associatif clé-valeur avec les valeurs en shuffleposition____________________________________________________________________________________________________________________________
$tableauAssociatifStagiaire = shufflePositions($tableauStagiaire);
print_r($tableauAssociatifStagiaire);
echo "\n";


?>