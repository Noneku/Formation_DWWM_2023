<?php

$a = readline("entrer un premier nombre : ");
$b = readline("entrer un second nombre : ");


if (($a < 1 && $a > -1) && ($b < 1 && $b > -1)) {
    echo "ce nombre est nul"; 
}
else if ($a > 0 && $b > 0) {
    echo "les produits sont positif";
} else {
    echo "les produits sont negatif";
}

?>