<?php

/*

écrire une fonction nommée `addition` qui :

- prend deux paramètres de type nombre entier
- renvoit le résultat de l'addition des deux paramètres

appeler cette fonction en lui passant les paramètres ayant la valeur `1` et `2` et afficher le résultat dans la console

*/


function addition (int $nb1, int $nb2) : int {
    $resultat = $nb1+$nb2;
    echo "Le résultat de l'addition de $nb1 et $nb2 est $resultat. \n";
    return $resultat;
}

addition(4,5);
addition(22, 49);