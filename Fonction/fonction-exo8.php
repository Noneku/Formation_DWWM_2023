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

function nombre_entiers($a, $b)  {
    if (is_int($a) && is_int($b)) {
        return true;
    } else if (!is_int($a))  {
     echo "$a n'est pas un nombre entier";
        }else if (!is_int($b)) {
        echo "$b n'est pas un nombre entier";
        }
        return false;
    }


$resultat = nombre_entiers (10, 5);
var_dump ($resultat);

$resultat = nombre_entiers (2, 8);
var_dump ($resultat);

$resultat = nombre_entiers (10, 15);
var_dump ($resultat);

$resultat = nombre_entiers (7, 7);
var_dump ($resultat);

$resultat = nombre_entiers ("foo", 15);
var_dump ($resultat);

$resultat = nombre_entiers (10, "bar");
var_dump ($resultat);

$resultat = nombre_entiers ("foo", "bar");
var_dump ($resultat);


