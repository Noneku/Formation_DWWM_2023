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

$variable = 42;

switch ($variable) {
    case 'integer':
        echo '$variable est un nombre entier';
        echo PHP_EOL;
        break;
    case 'string':
        echo '$variable est une chaîne de caractères';
        echo PHP_EOL;
        break;
    case 'double':  // Remarque : gettype() retourne "double" pour les nombres à virgule flottante.
        echo '$variable est un nombre à virgule flottante';
        echo PHP_EOL;
        break;
    case 'object':
        echo '$variable est un objet';
        echo PHP_EOL;
        break;
    case 'NULL':  // Remarque : gettype() retourne "NULL" pour les valeurs null.
        echo '$variable a la valeur NULL';
        echo PHP_EOL;
        break;
    }

    $variable = 'cours de php';

    switch ($variable) {
        case 'integer':
            echo '$variable est un nombre entier';
            echo PHP_EOL;
            break;
        case 'string':
            echo '$variable est une chaîne de caractères';
            echo PHP_EOL;
            break;
        case 'double':  // Remarque : gettype() retourne "double" pour les nombres à virgule flottante.
            echo '$variable est un nombre à virgule flottante';
            echo PHP_EOL;
            break;
        case 'object':
            echo '$variable est un objet';
            echo PHP_EOL;
            break;
        case 'NULL':  // Remarque : gettype() retourne "NULL" pour les valeurs null.
            echo '$variable a la valeur NULL';
            echo PHP_EOL;
            break;
        }

        $variable = 4.2;

switch ($variable) {
    case 'integer':
        echo '$variable est un nombre entier';
        echo PHP_EOL;
        break;
    case 'string':
        echo '$variable est une chaîne de caractères';
        echo PHP_EOL;
        break;
    case 'double':  // Remarque : gettype() retourne "double" pour les nombres à virgule flottante.
        echo '$variable est un nombre à virgule flottante';
        echo PHP_EOL;
        break;
    case 'object':
        echo '$variable est un objet';
        echo PHP_EOL;
        break;
    case 'NULL':  // Remarque : gettype() retourne "NULL" pour les valeurs null.
        echo '$variable a la valeur NULL';
        echo PHP_EOL;
        break;
    }

    $variable = new stdClass();

switch ($variable) {
    case 'integer':
        echo '$variable est un nombre entier';
        echo PHP_EOL;
        break;
    case 'string':
        echo '$variable est une chaîne de caractères';
        echo PHP_EOL;
        break;
    case 'double':  // Remarque : gettype() retourne "double" pour les nombres à virgule flottante.
        echo '$variable est un nombre à virgule flottante';
        echo PHP_EOL;
        break;
    case 'object':
        echo '$variable est un objet';
        echo PHP_EOL;
        break;
    case 'NULL':  // Remarque : gettype() retourne "NULL" pour les valeurs null.
        echo '$variable a la valeur NULL';
        echo PHP_EOL;
        break;
    }

    $variable = null;

switch ($variable) {
    case 'integer':
        echo '$variable est un nombre entier';
        echo PHP_EOL;
        break;
    case 'string':
        echo '$variable est une chaîne de caractères';
        echo PHP_EOL;
        break;
    case 'double':  // Remarque : gettype() retourne "double" pour les nombres à virgule flottante.
        echo '$variable est un nombre à virgule flottante';
        echo PHP_EOL;
        break;
    case 'object':
        echo '$variable est un objet';
        echo PHP_EOL;
        break;
    case 'NULL':  // Remarque : gettype() retourne "NULL" pour les valeurs null.
        echo '$variable a la valeur NULL';
        echo PHP_EOL;
        break;
    }
