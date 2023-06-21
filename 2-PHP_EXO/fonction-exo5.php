<?php

/*

écrire une fonction nommée `puissance` qui :

- prend un premier paramètres de type nombre entier
- prend un deuxième paramètres de type nombre entier ayant la valeur par défaut `2`
- élève le premier paramètre à la puissance du deuxième paramètre
- renvoit le résultat

appeler cette fonction en lui passant un seul paramètre ayant la valeur `2` et afficher le résultat dans la console
appeler cette fonction en lui passant les paramètres ayant la valeur `2` et `3` et afficher le résultat dans la console

*/

function puissance($nombre, $entier = 2) {
    return pow($nombre, $entier);
}

$resultat1 = puissance(2);
$resultat2 = puissance(2, 3);

echo $resultat1;
echo PHP_EOL;
echo $resultat2;
