<?php

// Écrivez une fonction qui additionne les deux variables qui lui sont passées en paramètre et renvoie le résultat sans l'afficher

function addition($a, $b) {
    $resultat = $a + $b;
    return $resultat;
}

// Autre types de fonction pour additionner deux variables

$nombre1 = 10;
$nombre2 = 5;

$somme = addition($nombre1, $nombre2);

echo $somme; 

