<?php

/*

la valeur `'bynjyur tyut le mynde !'` est affectée à la variable `$texte`

à l'aide la fonction `str_replace`, remplacez tout les `y` par des `o`
stocker le résultat de la fonction dans la variable `$texte`
affichager la variable `$texte` dans la console

si besoin, référez-vous à la documentation sur la fonction `implode` :

PHP: str_replace - Manual
http://php.net/manual/fr/function.str-replace.php

*/

$texte = 'bynjyur tyut le mynde !';

// str_replace — Remplace toutes les occurrences dans une chaîne
// structure : on remplace y par o dans $texte 
$texte = str_replace('y', 'o', $texte);

// affichage
echo $texte;
