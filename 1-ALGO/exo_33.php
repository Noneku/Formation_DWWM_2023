<?php
// Variables pour savoir combien de valeurs ils souhaitent rentré
$valeurs = readline("Combien de valeurs souhaitez vous saisir ? ");
$tab = array();
$neg = 0;
$pos = 0;
// Boucles 
for ($i=0; $i < $valeurs; $i++) { 
    $val = readline("Saisir valeurs : ");
   $tab[$i] = $val; 

   // Si les valeurs sont négatif
if ($val < 0) {
    $neg++;
   
}
// Si les valeurs sont positif
elseif ($val > 0) {
    $pos++;

}
}

// Afficher le tableau
print_r($tab);

echo "il y a $neg de valeurs négatif \n";
echo "Il y a $pos de valeurs positif";




?>