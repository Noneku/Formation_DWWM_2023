

/*

traduire les blocs conditionnels `if` en blocs conditionnels `switch`

résultat attendu :
$variable est un nombre entier
$variable est une chaîne de caractères
$variable est un nombre à virgule flottante
$variable est un objet
$variable a la valeur null

*/

<?php

$variable = 42;

switch ($variable) {
    case 'int':
        echo " $variable est un nombre entier ";
        break;
    }
switch ($variable) {
    case 'string':
        break;
    echo '$variable est une chaîne de caractères';
    
} switch($variable) {
    case 'float':
    echo '$variable est un nombre à virgule flottante';
    break;}
    
 switch($variable) {
    case 'objet':
    echo '$variable est un objet';
    break;
    
} switch($variable) {
    case 'null':
    echo '$variable a la valeur NULL';
    break;
    
}

?>




