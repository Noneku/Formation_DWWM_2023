<?php
// Variable nombres
$nombre1 = readline("Entrée un nombre : ");
$nombre2 = readline("Entrée un nombre : ");

// Résultat stocké dans une variable qui sera incrémentée à chaque tour de boucle
$resultat = 0;

// Vérifier si un des nombres est nul
if ($nombre1 == 0 or $nombre2 == 0) {
    $resultat = 0;
} else {
    // Nous ajoutons la valeur de $nombre1 à la variable $resultat $nombre2 fois, en simulant la multiplication.
    for ($i = 0; $i < $nombre2; $i++) {
        $resultat += $nombre1;
    }
}

echo "Le résultat de la multiplication de $nombre1 et $nombre2 est : $resultat";




?>