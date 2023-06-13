<?php
$tab = array();
$total = 0;
$noteSuperieur = array();

for ($i = 0; $i < 5; $i++) {
    $nb = readline("Entrer un nombre");
    $tab[$i] = ($nb);
    $total += $tab[$i];
}

$moyenne = $total / count($tab);

for ($i = 0; $i < 5; $i++) {

    if ($tab[$i] > $moyenne) {
        $noteSuperieur[$i] = $tab[$i];
    }
}
echo "moyenne: " . $moyenne;
echo "\n";
print_r($noteSuperieur);
