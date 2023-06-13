<?php

$a = readline("entrer un nombre");

if ($a == 0) {
    echo "ce nombre est null";
} else if ($a > 0) {
    echo "ce nombre est positif";
} else if ($a < 0) {
    echo "ce nombre est negatif";
}

?>