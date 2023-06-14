<?php

/*

écrire une fonction nommée `puissance` qui :

- prend un premier paramètre de type nombre entier
- prend un deuxième paramètre de type nombre entier ayant la valeur par défaut `2`
- élève le premier paramètre à la puissance du deuxième paramètre
- renvoit le résultat

appeler cette fonction en lui passant un seul paramètre ayant la valeur `2` et afficher le résultat dans la console
appeler cette fonction en lui passant les paramètres ayant la valeur `2` et `3` et afficher le résultat dans la console

*/


function puissance (int $nb1, int $nb2=2) : int {
    return pow($nb1, $nb2);
}


echo puissance(2);
echo "\n";
echo puissance(2, 3);
