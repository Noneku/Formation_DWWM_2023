<?php

/*

la valeur `'bynjyur tyut le mynde !'` est affectée à la variable `$texte`

à l'aide la fonction `str_replace`, remplacez tout les `y` par des `o`
stocker le résultat de la fonction dans la variable `$texte`
afficher la variable `$texte` dans la console

si besoin, référez-vous à la documentation sur la fonction `implode` :

PHP: str_replace - Manual
http://php.net/manual/fr/function.str-replace.php

*/

$texte = 'Bynjyur tyut le mynde !';

$texte = str_replace("y", "o", $texte);

echo $texte;