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
if (true) {
    echo "c'est vrai";
    echo PHP_EOL;
}


switch (true) {
    
    case true :
        echo "C'est vrai";

}


echo "\n";


// bloc 2

$i = 2;

if ($i == 100) {
    echo "égal à cent";
    echo PHP_EOL;
} else {
    echo "différent de cent";
    echo PHP_EOL;
}


switch ($i) {

    case $i == 100;
    echo " egal à cent";
    break;

    default:
    echo "different de cent";

}

echo "\n";


// bloc 3
$password = "toto";

if ($password == "toto") {
    echo "vous êtes loggé";
    echo PHP_EOL;
}
else if ($password == "1234") {
    echo "êtes-vous un robot ?";
    echo PHP_EOL;
} else if ($password = "abcd") {
    echo "êtes-vous un robot ?";
    echo PHP_EOL;
} else {
    echo "mauvais mot de passe";
    echo PHP_EOL;
}

switch ( $password) {

    case $password == "toto";
    echo "vous etes loggé";
    break;

    case $password == "abcd";
    echo " Etes-vous un robot?";
    break;

    default:
    echo " mauvais mot de passe";
    
}

echo "\n";

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
        echo "$variable est un nomnbre entier";
        echo PHP_EOL;
        break;
    }