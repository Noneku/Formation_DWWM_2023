

<!-- /*

traduire le bloc conditionnel `if` en bloc conditionnel `switch`

résultat attendu :
$variable a la valeur NULL
$variable est un objet
$variable est une chaîne de caractères
$variable est un nombre à virgule flottante
$variable est un nombre entier

*/ -->

<?php

$liste = array(null, new stdClass(), 'cours de php', 4.2, 42);

for ($i = 0; $i < count($liste); $i++) {

    $variable = $liste[$i];}

    switch ($variable) {
        case 'null':
            echo " variable is null";
            break;

            case "is objet":
                echo "variable est un objet";
                break;

                case "is string" :
                    echo " variable est une chaine de caractere";
                    break;

                    case "is float" : 
                         echo " variable est un numbre a virgule flottante";
                         break;

                         case 'is int':
                            echo '$variable est un nombre entier';
                            break;
        
    }

?>