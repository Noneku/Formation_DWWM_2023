<?php

// Variable pour le plus grand nombre 
$nb = 0;
// Variable pour la position du plus grand nombre
$position = 0;

// Boucle pour demander 20 nombres 
for ($i = 1; $i <=20; $i++){

    // Demander à l'utilisateur de saisir un nombre
    echo "Entrée vôtre nombre : $i ";

    // lecture de la saisie
    $a = readline();

    // Voir si c'est le plus grand nombre
    if ($nb == 0 or $a > $nb) {
        $nb = $a;
        $position = $i;
    }
}

echo "Le plus grand nombre saisi est : $nb";
echo "\n";
echo "Il était à la position : $position";
?>