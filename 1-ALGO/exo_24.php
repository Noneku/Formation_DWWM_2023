<?php

$sexe = readline("entrer votre sexe");
$age = readline("entrer votre age");
$impot;

if ($sexe == "H" && $age > 20) {
    $impot = true;
} else if ($sexe == "F" && $age >= 18 && $age <= 35) {
    $impot = true;
} else {
    $impot = false;
}

if ($impot) {
    echo "Imposable";
} else {
    echo "Non imposable";
}
