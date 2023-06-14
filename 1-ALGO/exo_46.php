<?php 

// Ecrire un algo qui insère un élément X dans un tableau T en respectant l'odre croissant 


// Déclaration :
$tabT = array(2, 4, 6, 8, 10);
$tabT[] = readline("Entrez un chiffre à ajouter dans le tableau : ");
$temp = 0;


// Instruction :
for ($i = 0; $i < count($tabT); $i++) {
    for ($j = 0; $j < count($tabT); $j++){
    
        if ($tabT[$j] > $tabT[$i]) {
            $temp = $tabT[$i];
            $tabT[$i] = $tabT[$j];
            $tabT[$j] = $temp;
        }
    }
}


// Affichage :
print_r($tabT);
?>