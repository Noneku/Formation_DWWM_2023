<?php

/*

traduire le bloc conditionnel `if` en bloc conditionnel `switch`

résultat attendu :
$variable a la valeur NULL
$variable est un objet
$variable est une chaîne de caractères
$variable est un nombre à virgule flottante
$variable est un nombre entier

*/

$liste = array(null, new stdClass(), 'cours de php', 4.2, 42);

for ($i = 0; $i < count($liste); $i++) {

    $variable = $liste[$i];

    switch (true) {
        case (is_int($liste[$i])) ;
            echo '$variable est un nombre entier';
            echo PHP_EOL;
            break;
        case (is_string($liste[$i])) ;
            echo '$variable est une chaîne de caractères';
            echo PHP_EOL;
            break;
         case (is_float($liste[$i])) ;
            echo '$variable est un nombre à virgule flottante';
            echo PHP_EOL;
            break;   
            case (is_object($liste[$i]));
                echo '$variable est un objet';
                echo PHP_EOL;  
                break;
                case (is_null($liste[$i])) ;
                    echo '$variable a la valeur NULL';
                    echo PHP_EOL;
        
        default:
            # code...
            break;
    }
}

