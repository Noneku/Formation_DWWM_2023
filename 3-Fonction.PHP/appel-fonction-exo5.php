<?php

/*

utiliser la fonction `str_replace()` en lui donnant en paramètre la variable `$texte` pour remplacer :

- toutes les lettre `E` majuscule par des chiffres `3`
- toutes les lettre `I` majuscule par des chiffres `1`
- toutes les lettre `O` majuscule par des chiffres `0`

afficher le résultat dans la console

*/

$texte = 'PHP IS A SERVER-SIDE SCRIPTING LANGUAGE DESIGNED FOR WEB DEVELOPMENT BUT ALSO USED AS A GENERAL-PURPOSE PROGRAMMING LANGUAGE.';

// Fonction str_repklace pour replacer les éléments 
$texte = str_replace('3', 'E', $texte);
$texte = str_replace('1', 'I', $texte);
$texte = str_replace('0', 'O', $texte);

// Affichage
echo $texte;

?>