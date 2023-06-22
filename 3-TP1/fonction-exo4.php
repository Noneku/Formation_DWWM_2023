<?php

/*

écrire une fonction nommée `soustraction` qui :

- prend deux paramètres de type nombre entier
- renvoit le résultat de la soustraction des deux paramètres

appeler cette fonction en lui passant les paramètres ayant la valeur `3` et `2`
afficher le résultat dans la console

*/

function soustraction(int $nb1, int $nb2) : int {
    $result = $nb1 - $nb2;
    echo "Le $nb1 - $nb2 est egal au resultat $result";
    return $result;
}

soustraction(5,4);