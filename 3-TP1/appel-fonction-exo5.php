<?php

/*

utiliser la fonction `str_replace()` en lui donnant en paramètre la variable `$texte` pour remplacer :

- toutes les lettre `c` majuscule par des chiffres `3`
- toutes les lettre `I` majuscule par des chiffres `1`
- toutes les lettre `O` majuscule par des chiffres `0`

afficher le résultat dans la console

*/

$texte = 'PHP IS A SERVER-SIDE SCRIPTING LANGUAGE DESIGNED FOR WEB DEVELOPMENT BUT ALSO USED AS A GENERAL-PURPOSE PROGRAMMING LANGUAGE.';

$search = array("C", "I", "O");
$replace = array("3", "1", "0");

$texte = str_replace($search, $replace, $texte);

echo $texte;