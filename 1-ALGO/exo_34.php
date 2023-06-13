<?php

$tab = array(1,2,3,4);
$resultat = 0;
for ($i = 0; $i < count($tab); $i++) {
    $resultat += $tab[$i];
}
echo $resultat;

?>