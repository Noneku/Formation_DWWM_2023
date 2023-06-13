<?php

$tab = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$max = 0;

for ($i = 0; $i < count($tab); $i++) {
    if ($tab[$i] > $max) {
        $max = $tab[$i];
    }
}
echo $max;
