<?php

// $max = 0;
// $pos = 0;
// $i = 1;
// $nb = 1;

// while ($nb != 0) {
//     $nb = readline("Entrer un nombre");
//     if ($max < $nb) {
//         $max = $nb;
//         $pos = $i;
//         }
//     $i++;
//     }
//     echo "$max en $pos";

$max = 0;
$pos = 0;
$i = 0;
$nb = 0;

do {
    $i++;
    $nb = readline("Entrer un nombre");
    if ($max < $nb) {
        $max = $nb;
        $pos = $i;
        }
    } while ($nb != 0);
    echo "$max en $pos";

?>