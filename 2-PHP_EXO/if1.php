<?php

// Écrivez un bloc `if` qui affiche si la variable suivante est :
//     - plus grande que 10
//     - plus petite que 10
//     - égale à 10

$nombre = 10;

if ($nombre > 10) {
    echo "plus grande que 10";
} else if ($nombre == 10) {
    echo "égale a 10";
} else {
    echo "plus petit que 10";
}
