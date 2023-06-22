<?php
$liste = array(null, new stdClass(), 'cours de php', 4.2, 42);

for ($i = 0; $i < count($liste); $i++) {
    $variable = $liste[$i];

    switch (gettype($variable)) {
        case 'NULL':
            echo '$variable a la valeur NULL';
            echo PHP_EOL;
            break;
        case 'object':
            echo '$variable est un objet';
            echo PHP_EOL;
            break;
        case 'string':
            echo '$variable est une chaîne de caractères';
            echo PHP_EOL;
            break;
        case 'double':  // Note : gettype() returns "double" for floating point numbers.
            echo '$variable est un nombre à virgule flottante';
            echo PHP_EOL;
            break;
        case 'integer':
            echo '$variable est un nombre entier';
            echo PHP_EOL;
            break;
        default:
            echo 'Type de $variable non reconnu.';
            echo PHP_EOL;
            break;
    }
}