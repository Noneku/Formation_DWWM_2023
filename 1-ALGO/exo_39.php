<?php
$tab = array();
$total = 0;
$noteSuperieur = array();
$valeur = 0;

for ($i = 0; $i < $valeur; $i++) {
    $nb = readline("Entrer un nombre");
    $tab[$i] = ($nb);
    $total += $tab[$i];
}

$moyenne = $total / count($tab);

for ($i = 0; $i < $valeur; $i++) {

    if ($tab[$i] > $moyenne) {
        $noteSuperieur[$i] = $tab[$i];
    }
}
echo "moyenne: ".$moyenne;
echo "\n";
print_r($noteSuperieur);



?>