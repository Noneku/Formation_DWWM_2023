<?php

/*

utiliser la fonction `str_replace()` en lui donnant en paramètre la variable `$texte` pour remplacer :

- toutes les lettre `E` majuscule par des chiffres `3`
- toutes les lettre `I` majuscule par des chiffres `1`
- toutes les lettre `O` majuscule par des chiffres `0`

afficher le résultat dans la console

*/

$texte = 'PHP IS A SERVER-SIDE SCRIPTING LANGUAGE DESIGNED FOR WEB DEVELOPMENT BUT ALSO USED AS A GENERAL-PURPOSE PROGRAMMING LANGUAGE.';
$replace = array('E', 'I', 'O');
$numbers = array(3, 1, 0);

$texte = str_replace(
    $replace,
    $numbers,
    $texte,
);

echo $texte;



// $texte = str_replace(
//     'E',
//     '3',
//     $texte,
// );
// $texte = str_replace(
//     'I',
//     '1',
//     $texte,
// );
// $texte = str_replace(
//     'O',
//     '0',
//     $texte,
// );
// echo $texte;

