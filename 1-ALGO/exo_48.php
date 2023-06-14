<?php

// Soit T un tableau de N entiers, écrire un algo qui détermine quel chiffre est le plus grand 

// Déclaration :
$tabT = array();
$nbT = readline("Entrez le nombre de valeurs à insérer dans le tableau : ");
$max = 0;

// Instruction :
for ($i = 0; $i < $nbT; $i++) {
    $tabT[$i] = readline("Entrez un chiffre à ajouter dans le tableau : ");
    
    if ($tabT[$i] > $max) {
        $max = $tabT[$i];
    }
}

// Affichage :
print_r($tabT);
echo "La valeur la plus grande est $max.";
?>