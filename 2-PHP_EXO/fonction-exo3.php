<?php

/*

écrire une fonction nommée `addition` qui :

- prend deux paramètres de type nombre entier
- renvoit le résultat de l'addition des deux paramètres

appeler cette fonction en lui passant les paramètres ayant la valeur `1` et `2` et afficher le résultat dans la console

*/

function addition($nombre1, $nombre2) {
    return $nombre1 + $nombre2;
}

$resultat = addition(1, 2);
echo $resultat;
