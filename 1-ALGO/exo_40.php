<?php

// écrire un algo qui recherche la plus grande valeur d'un tableau T à 2 dimensions 

// Déclaration : 

$pg = 0;
$tabT = [[12, 8, 7, 6, 4, 2], [6, 8, 9, 5, 7, 4], [12, 3, 8, 13, 16, 20]];

// Instructions :
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < count($tabT[$i]); $j++) {

        if ($pg < $tabT[$i][$j]) {
            $pg = $tabT[$i][$j];
        }
    }
}

// Affichage : 
print_r($tabT);
echo "Le plus grand nombre des tableaux est : $pg.";
?>