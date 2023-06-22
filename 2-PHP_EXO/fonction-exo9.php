<?php
function a_plus_grand_b($a, $b) {
    if (!is_int($a) || !is_int($b)) {
        return false;
    }

    if ($a > $b) {
        return 1;
    } else if ($a < $b) {
        return -1;
    } else {
        return 0;
    }
}

$resultat = a_plus_grand_b(10, 5);
var_dump($resultat);  // Affiche : int(1)

$resultat = a_plus_grand_b(2, 8);
var_dump($resultat);  // Affiche : int(-1)

$resultat = a_plus_grand_b(7, 7);
var_dump($resultat);  // Affiche : int(0)

$resultat = a_plus_grand_b('foo', 5);
var_dump($resultat);  // Affiche : bool(false)

$resultat = a_plus_grand_b(10, 'bar');
var_dump($resultat);  // Affiche : bool(false)

$resultat = a_plus_grand_b('foo', 'bar');
var_dump($resultat);  // Affiche : bool(false)

