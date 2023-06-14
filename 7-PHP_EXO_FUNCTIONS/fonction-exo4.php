<?php

/*

écrire une fonction nommée `soustraction` qui :

- prend deux paramètres de type nombre entier
- renvoit le résultat de la soustraction des deux paramètres

appeler cette fonction en lui passant les paramètres ayant la valeur `3` et `2`
afficher le résultat dans la console

*/


function soustraction (int $nb1, int $nb2) : int {
    $resultat = $nb1 - $nb2;
    echo "Le résultat de la soustraction de $nb1 et $nb2 est $resultat. \n";
    return $resultat;
}

soustraction(3, 2);
soustraction(4, 6);

// ou

// function soustraction (int $nb1, int $nb2) : int {
//     $resultat = $nb1 - $nb2;
//     return $resultat;
// }

// echo soustraction(3, 2);
// echo "\n";
// echo soustraction(4, 6);