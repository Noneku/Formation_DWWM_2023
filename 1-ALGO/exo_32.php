<?php

// Ecrire un algo qui déclare un tableau de 9 notes dont on fait ensuite saisir les valeurs par l'utilisateur 

// Variables :
$notes = array();


// Instruction :
for ($i = 0 ; $i < 9 ; $i++) {
    $notes[$i] = readline("Saisir une note à insérer dans le tableau : ");
}

print_r($notes);


?>