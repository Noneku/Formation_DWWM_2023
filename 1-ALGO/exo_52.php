<?php

$tab = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$pair = 0;
$impair = 0;

for ($i = 0; $i < count($tab); $i++) {
    if ($tab[$i] % 2 == 0) { // si modulo 2 = 0 alors forcement pair
        $pair++;
    } else {
        $impair++;
    }
}

echo "il y a $pair nombre pair et $impair nombre impaire";
