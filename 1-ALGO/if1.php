<?php

// Écrivez un bloc `if` qui affiche si la variable suivante est :
//     - plus grande que 10
//     - plus petite que 10
//     - égale à 10

$nombre = 10;

if ($nombre > 10) {
    echo 'le chiffre saisie est plus grande que 10';
}elseif ($nombre < 10) {
    echo 'le chiffre saisie est plus petite que 10';
} else
    echo 'le chiffre saisie est égal à 0';