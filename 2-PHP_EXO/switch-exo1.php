<?php

/*

traduire les blocs conditionnels `if` en blocs conditionnels `switch`

bloc 1
résultat attendu :
c"est vrai

bloc 2
résultat attendu :
différent de cent

bloc 3
résultat attendu :
êtes-vous un robot ?

bloc 4
résultat attendu :
$variable est un nomnbre entier

*/

// bloc 1
switch (true) {
  case true:
    echo "c'est vrai";
    echo PHP_EOL;
}



// bloc 2
$i = 2;

switch($i) { 
case 100: 
    echo "égal à cent";
    echo PHP_EOL;
    break;
 default:
    echo "différent de cent";
    echo PHP_EOL;
}

// bloc 3
switch($password){
case "toto":
    echo "vous êtes loggé";
    echo PHP_EOL;
    break;
    case "1234": 
    echo "êtes-vous un robot ?";
    echo PHP_EOL;
    break;
    case"abcd";
    echo "mauvais mot de passe";
    echo PHP_EOL;
}

// bloc 4
$variable = 1;

if (is_string($variable)) {
    echo "$variable est une chaîne de caractères";
    echo PHP_EOL;
} else if (is_float($variable)) {
    echo "$variable est un nombre à virgule flottante";
    echo PHP_EOL;
} else if (is_array($variable)) {
    echo "$variable est une liste ";
    echo PHP_EOL;
} else if  (is_int($variable)) {
    echo "$variable est un nomnbre entier";
    echo PHP_EOL;
}

