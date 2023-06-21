<?php

include("../Ctrl/execute4_createTableStudent.php");
include_once("../Modele/functions.php");

// Sauvegarde Tableau style Associatif en CSV____________________________________________________________________________________________________________
saveTableStudentsToCSVFile($listeStagiaireAssociatif);


?>