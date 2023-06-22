<?php

// Variable
$nb = 1;
$position = 0;
$max = 0;
$i = 0;
 
 while ($nb != 0){

    // Demander à l'utilisateur de saisir un nombre
    $nb = readline("Entrée vôtre nombre : ");
     ;

    // Voir si c'est le plus grand nombre
    if ($nb > $max) {
        $max = $nb;
        $position = $i;
    }
}

echo "Le plus grand nombre saisi est : $max";
echo "\n";
echo "Il était à la position : $position";

?>