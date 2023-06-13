<?php

/*

traduire les blocs conditionnels `if` en blocs conditionnels `switch`

résultat attendu :
$variable est un nombre entier
$variable est une chaîne de caractères
$variable est un nombre à virgule flottante
$variable est un objet
$variable a la valeur null

*/



// if (is_int($variable)) {
//     echo '$variable est un nombre entier';
//     echo PHP_EOL;
// } else if (is_string($variable)) {
//     echo '$variable est une chaîne de caractères';
//     echo PHP_EOL;
// } else if (is_float($variable)) {
//     echo '$variable est un nombre à virgule flottante';
//     echo PHP_EOL;
// } else if (is_object($variable)) {
//     echo '$variable est un objet';
//     echo PHP_EOL;
// } else if (is_null($variable)) {
//     echo '$variable a la valeur NULL';
//     echo PHP_EOL;
// }



//bloc 1 
$variable = 42;

switch ($variable) {
    case is_string($variable):
        echo "$variable est une chaîne de caractères";
        echo PHP_EOL;
        break;
    case is_float($variable):
        echo "$variable est un nombre à virgule flottante";
        echo PHP_EOL;
        break;
    case is_array($variable):
        echo "$variable est une liste ";
        echo PHP_EOL;
        break;
    case is_int($variable):
        echo "$variable est un nombre entier";
        echo PHP_EOL;
        break;

    case null:
        echo "$variable a la valeur NULL";
        echo PHP_EOL;
        echo PHP_EOL;
        break;

    default;
        break;
}










// if (is_int($variable)) {
//     echo '$variable est un nombre entier';
//     echo PHP_EOL;
// } else if (is_string($variable)) {
//     echo '$variable est une chaîne de caractères';
//     echo PHP_EOL;
// } else if (is_float($variable)) {
//     echo '$variable est un nombre à virgule flottante';
//     echo PHP_EOL;
// } else if (is_object($variable)) {
//     echo '$variable est un objet';
//     echo PHP_EOL;
// } else if (is_null($variable)) {
//     echo '$variable a la valeur NULL';
//     echo PHP_EOL;
// }

//bloc 2 
$variable = 'cours de php';
switch ($variable) {
    case is_string($variable):
        echo "$variable est une chaîne de caractères";
        echo PHP_EOL;
        break;
    case is_float($variable):
        echo "$variable est un nombre à virgule flottante";
        echo PHP_EOL;
        break;
    case is_array($variable):
        echo "$variable est une liste ";
        echo PHP_EOL;
        break;
    case is_int($variable):
        echo "$variable est un nombre entier";
        echo PHP_EOL;
        break;
    case null:
        echo "$variable a la valeur NULL";
        echo PHP_EOL;
        echo PHP_EOL;
        break;

    default;
        break;
}



// if (is_int($variable)) {
//     echo '$variable est un nombre entier';
//     echo PHP_EOL;
// } else if (is_string($variable)) {
//     echo '$variable est une chaîne de caractères';
//     echo PHP_EOL;
// } else if (is_float($variable)) {
//     echo '$variable est un nombre à virgule flottante';
//     echo PHP_EOL;
// } else if (is_object($variable)) {
//     echo '$variable est un objet';
//     echo PHP_EOL;
// } else if (is_null($variable)) {
//     echo '$variable a la valeur NULL';
//     echo PHP_EOL;
// }


//bloc 3 
$variable = 4.2;
switch ($variable) {
    case is_string($variable):
        echo "$variable est une chaîne de caractères";
        echo PHP_EOL;
        break;
    case is_float($variable):
        echo "$variable est un nombre à virgule flottante";
        echo PHP_EOL;
        break;
    case is_array($variable):
        echo "$variable est une liste ";
        echo PHP_EOL;
        break;
    case is_int($variable):
        echo "$variable est un nombre entier";
        echo PHP_EOL;
        break;
    case $variable === null:
        echo "$variable a la valeur NULL";
        echo PHP_EOL;
        echo PHP_EOL;
        break;

    default;
        break;
}




$variable = new stdClass();
// if (is_int($variable)) {
//     echo '$variable est un nombre entier';
//     echo PHP_EOL;
// } else if (is_string($variable)) {
//     echo '$variable est une chaîne de caractères';
//     echo PHP_EOL;
// } else if (is_float($variable)) {
//     echo '$variable est un nombre à virgule flottante';
//     echo PHP_EOL;
// } else if (is_object($variable)) {
//     echo '$variable est un objet';
//     echo PHP_EOL;
// } else if (is_null($variable)) {
//     echo '$variable a la valeur NULL';
//     echo PHP_EOL;
// }


//bloc 4 
switch (true) {

    case is_string($variable):
        echo "$variable est une chaîne de caractères";
        echo PHP_EOL;
        break;
    case is_float($variable):
        echo "$variable est un nombre à virgule flottante";
        echo PHP_EOL;
        break;
    case is_object($variable):
        echo ' C\'est est un objet';
        echo PHP_EOL;
        break;
    case is_int($variable):
        echo "$variable est un nombre entier";
        echo PHP_EOL;
        break;
    case $variable === null:
        echo "la valeur est NULL";
        echo PHP_EOL;
        echo PHP_EOL;
        break;

    default;
        break;
}




$variable = null;

// if (is_int($variable)) {
//     echo "$variable est un nombre entier";
//     echo PHP_EOL;
// } else if (is_string($variable)) {
//     echo "$variable est une chaîne de caractères";
//     echo PHP_EOL;
// } else if (is_float($variable)) {
//     echo "$variable est un nombre à virgule flottante";
//     echo PHP_EOL;
// } else if (is_object($variable)) {
//     echo "$variable est un objet";
//     echo PHP_EOL;
// } else if (is_null($variable)) {
//     echo "la valeur est null";
//     echo PHP_EOL;
// }

//Bloc 5
switch (true) {

    case is_string($variable):
        echo "$variable est une chaîne de caractères";
        echo PHP_EOL;
        break;
    case is_float($variable):
        echo "$variable est un nombre à virgule flottante";
        echo PHP_EOL;
        break;
    case is_array($variable):
        echo "$variable est une liste ";
        echo PHP_EOL;
        break;
    case is_int($variable):
        echo "$variable est un nombre entier";
        echo PHP_EOL;
        break;
    case is_null($variable):
        echo "$variable a la valeur NULL";
        echo PHP_EOL;
        echo PHP_EOL;
        break;

    default;
        break;
}


//bloc 5 
