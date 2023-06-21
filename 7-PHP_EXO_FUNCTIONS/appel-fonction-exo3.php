<?php

/*

créer une variable nommée `$liste` de type array qui contiendra les éléments `'artichaut'`, `'broccoli'` et `'carotte'`
appeler la fonction `implode` en lui passant la chaîne de caractères `', '` comme premier paramètre puis la variable `$liste` comme deuxième paramètre
stocker le résultat de la fonction dans une variable nommée `$legumes`
affichager la variable `$legumes` dans la console

si besoin, référez-vous à la documentation sur la fonction `implode` :

PHP: implode - Manual
http://php.net/manual/fr/function.implode.php

*/

// Construction du tableau 
$liste = array ( 'artichaut', ' brocoli', 'carotte');

// implode — Rassemble les éléments d'un tableau en une chaîne

implode ( ',' , $liste);

// stocker le résultat de la fonction dans une variable nommée `$legumes`
$legumes = implode ( ',' , $liste);

//  affichage
echo $legumes;


?>