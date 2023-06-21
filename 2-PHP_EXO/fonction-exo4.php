<?php

/*

écrire une fonction nommée `soustraction` qui :

- prend deux paramètres de type nombre entier
- renvoit le résultat de la soustraction des deux paramètres

appeler cette fonction en lui passant les paramètres ayant la valeur `3` et `2`
afficher le résultat dans la console

*/


function soustraction($nombre1, $nombre2) {
    
    return $nombre1 - $nombre2;
    }
    
// Appel de la fonction avec les paramètres 1 et 2
    $resultat = soustraction(2, 4);
    
// Affichage du résultat dans la console
    echo $resultat;
    
?>