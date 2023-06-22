<?php

$moyenne = 0;
$coef1 = 0;
$coef2 = 0;
$not1 = readline("Entrez votre note d'oral : ");
$not2 = readline("Entrez votre note d'ecris : ");

$coef1 = $not1 * 1;
$coef2 = $not2 * 2;

$moyenne = ($not1 + $not2)/3;

if ($moyenne>10) {
    echo "Vous validez le module";
}else{
    echo "Vous n'avez pas validez le module";
}


?>