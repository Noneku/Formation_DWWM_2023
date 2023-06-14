<?php

// Ecrire un algo qui permet 
$nbSaisies = readline("Entrez le nombre de saisie à faire : ");
$val = array();
$pg = 0;
$pos = 0;


// Instructions :
for ($i = 0; $i < $nbSaisies; $i++) {
    $val[$i] = readline("Saisir un nombre à insérer dans le tableau : "); 
}

for ($i = 0; $i < count($val); $i++) {
    if ($pg < $val[$i]) {
        $pg = $val[$i];
        $pos = $i+1;
}
}


// Affichage :
print_r($val);
echo "La valeur la plus grande du tableau est $pg, elle est située en position $pos.";

?>