<?php

/*

utiliser la fonction `str_replace()` en lui donnant en paramètre la variable `$texte` pour remplacer :

- toutes les lettre `E` majuscule par des chiffres `3`
- toutes les lettre `I` majuscule par des chiffres `1`
- toutes les lettre `O` majuscule par des chiffres `0`

afficher le résultat dans la console

*/

$texte = 'PHP IS A SERVER-SIDE SCRIPTING LANGUAGE DESIGNED FOR WEB DEVELOPMENT BUT ALSO USED AS A GENERAL-PURPOSE PROGRAMMING LANGUAGE.';

// Remplacer E par 3
$texte = str_replace( 'E', '3', $texte);
echo $texte;

// Remplacer I par 1
$texte = str_replace( 'I', '1', $texte);
echo $texte;

// Remplacer O par 0
$texte = str_replace( 'O', '0', $texte);
echo $texte;



