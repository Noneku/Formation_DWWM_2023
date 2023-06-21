<?php

/*

écrire une fonction nommée `nombres_entiers` qui :

- prend un paramètre nommé `$a`
- prend un paramètre nommé `$b`
- renvoit `false` si le paramètre `$a` n'est pas un nombre entier
- renvoit `false` si le paramètre `$b` n'est pas un nombre entier
- renvoit `true` sinon

appeler la fonction avec les paramètres `10` et `5`
stocker le résultat dans une variable nommée `$resultat`
afficher le contenu de la variable `$resultat` avec la fonction `var_dump`

appeler la fonction avec les paramètres `2` et `8`
stocker le résultat dans une variable nommée `$resultat`
afficher le contenu de la variable `$resultat` avec la fonction `var_dump`

appeler la fonction avec les paramètres `7` et `7`
stocker le résultat dans une variable nommée `$resultat`
afficher le contenu de la variable `$resultat` avec la fonction `var_dump`

appeler la fonction avec les paramètres `'foo'` et `5`
stocker le résultat dans une variable nommée `$resultat`
afficher le contenu de la variable `$resultat` avec la fonction `var_dump`

appeler la fonction avec les paramètres `10` et `'bar'`
stocker le résultat dans une variable nommée `$resultat`
afficher le contenu de la variable `$resultat` avec la fonction `var_dump`

appeler la fonction avec les paramètres `'foo'` et `'bar'`
stocker le résultat dans une variable nommée `$resultat`
afficher le contenu de la variable `$resultat` avec la fonction `var_dump`

*/


// var_dump — Affiche les informations d'une variable
// var_dump() affiche les informations structurées d'une variable, y compris son type et sa valeur.


function nombres_entiers ($a, $b) : bool  { 

    if ( ! is_int($a) || ! is_int($b)) {

        return false;

    } else {
        
        return true;
    }

}

$resultat = nombres_entiers(10, 5);
var_dump($resultat);

$resultat = nombres_entiers(2, 8);
var_dump($resultat);

$resultat = nombres_entiers(7, 7);
var_dump($resultat);

$resultat = nombres_entiers('foo', 5);
var_dump($resultat);

$resultat = nombres_entiers(10, 'bar');
var_dump($resultat);

$resultat = nombres_entiers('foo', 'bar');
var_dump($resultat);



