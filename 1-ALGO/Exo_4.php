<?php


// declaration variable $a et $b
$a = 3;
$b = 10;

// la variable $c va prendre la valeur de $a + $b
$c = $a + $b; 

// $b va prendre la valeur de $a + $b
$b = $a + $b;

// $a va prendre la valeur de $c
$a = $c;

// affichage du résultat $a
echo $a;

?> 

