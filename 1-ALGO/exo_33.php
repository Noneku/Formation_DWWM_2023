<?php
$nbValeurs = readline("Combien de valeurs?");

$tab = array();

$negatif = 0;
$positif = 0;
for ($i = 0; $i < $nbValeurs; $i++) {
    $tab[$i] = readline("Entrer une note");    

    if ($tab[$i] < 0) {
        $negatif++;
    } else {
        $positif++;
    }
}
echo "Il y a ".$negatif."Nombre negatif et".$positif."Nombre positif\n";

?>